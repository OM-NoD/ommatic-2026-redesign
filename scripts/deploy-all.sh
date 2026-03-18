#!/bin/bash
# ============================================================
# OMmatic 2026 – Vollständiger FTP-Deploy (alle Dateien)
# ============================================================
set -e

FTP_USER="${FTP_USER:-f0182283}"
FTP_PASS="${FTP_PASS:-Idca2019!!Idca2019!!}"
FTP_HOST="${FTP_HOST:-w020cff5.kasserver.com}"

GREEN='\033[0;32m'; RED='\033[0;31m'; YELLOW='\033[1;33m'; NC='\033[0m'
ok()   { echo -e "${GREEN}✓${NC} $1"; }
fail() { echo -e "${RED}✗${NC} $1"; FAIL_COUNT=$((FAIL_COUNT+1)); }
info() { echo -e "${YELLOW}→${NC} $1"; }

COUNT=0; FAIL_COUNT=0; SKIP_COUNT=0

# Ignorierte Pfade (nicht auf Server hochladen)
should_skip() {
    local f="$1"
    [[ "$f" == .git* ]]           && return 0
    [[ "$f" == .env ]]            && return 0
    [[ "$f" == scripts/* ]]       && return 0
    [[ "$f" == crawl/* ]]         && return 0
    [[ "$f" == README* ]]         && return 0
    [[ "$f" == *.md ]]            && return 0
    [[ "$f" == *.sh ]]            && return 0
    [[ "$f" == .env.example ]]    && return 0
    return 1
}

echo ""
echo "════════════════════════════════════════════════"
echo "  OMmatic FTP Deploy – ALLE Dateien"
echo "  Host : $FTP_HOST"
echo "  User : $FTP_USER"
echo "════════════════════════════════════════════════"
echo ""

# Alle tracked + untracked files (git ls-files + find)
ALL_FILES=$(git ls-files 2>/dev/null && find . -type f -not -path './.git/*' -not -path './.env' | sed 's|^./||' | sort -u)
UNIQUE_FILES=$(echo "$ALL_FILES" | sort -u)

while IFS= read -r file; do
    [[ -z "$file" ]] && continue
    [[ ! -f "$file" ]] && continue
    should_skip "$file" && { SKIP_COUNT=$((SKIP_COUNT+1)); continue; }

    result=$(curl -s \
        --user "${FTP_USER}:${FTP_PASS}" \
        -T "$file" \
        "ftp://${FTP_HOST}/${file}" \
        --ftp-create-dirs \
        --connect-timeout 15 \
        --max-time 60 \
        2>&1)

    exit_code=$?
    if [ $exit_code -eq 0 ]; then
        ok "$file"
        COUNT=$((COUNT+1))
    else
        fail "$file"
    fi
done <<< "$UNIQUE_FILES"

echo ""
echo "════════════════════════════════════════════════"
echo -e "  ✓ Erfolgreich : ${GREEN}${COUNT}${NC}"
echo -e "  ✗ Fehler      : ${RED}${FAIL_COUNT}${NC}"
echo -e "  ⟳ Übersprungen: ${YELLOW}${SKIP_COUNT}${NC}"
echo "════════════════════════════════════════════════"
echo ""

if [ "$FAIL_COUNT" -gt 0 ]; then
    echo "Einige Dateien konnten nicht hochgeladen werden."
    exit 1
fi
echo "Deploy abgeschlossen!"
