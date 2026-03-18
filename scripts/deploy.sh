#!/bin/bash
# ============================================================
# OMmatic 2026 – Deploy-Script
# Lädt nur geänderte Dateien via FTP hoch (git diff)
# ============================================================
# Verwendung:
#   bash scripts/deploy.sh              → seit letztem Commit
#   bash scripts/deploy.sh HEAD~3 HEAD  → letzte 3 Commits
#   bash scripts/deploy.sh --all        → alle Dateien (Erstdeploy)
# ============================================================

set -e

# ── Konfiguration (aus Umgebungsvariablen oder .env) ────────
# FTP-Credentials NICHT im Repo speichern!
# Setze sie per: export FTP_USER=... FTP_PASS=... vor dem Aufruf
# oder lege eine .env-Datei an (ist in .gitignore).
if [ -f "$(dirname "$0")/../.env" ]; then
    source "$(dirname "$0")/../.env"
fi

FTP_USER="${FTP_USER:-f0182283}"
FTP_PASS="${FTP_PASS:?Fehler: FTP_PASS nicht gesetzt. export FTP_PASS=... oder .env anlegen}"
FTP_HOST="${FTP_HOST:-w020cff5.kasserver.com}"
FTP_REMOTE_ROOT="/"   # Webroot = Root, kein Unterordner

# ── Farben ──────────────────────────────────────────────────
GREEN='\033[0;32m'; RED='\033[0;31m'; YELLOW='\033[1;33m'; NC='\033[0m'
ok()   { echo -e "${GREEN}✓${NC} $1"; }
fail() { echo -e "${RED}✗ FAIL${NC} $1"; }
info() { echo -e "${YELLOW}→${NC} $1"; }

# ── Dateien ermitteln ────────────────────────────────────────
if [ "$1" = "--all" ]; then
    info "Modus: ALLE Dateien (Erstdeploy)"
    FILES=$(git ls-files)
else
    FROM="${1:-HEAD~1}"
    TO="${2:-HEAD}"
    info "Modus: geänderte Dateien seit $FROM bis $TO"
    FILES=$(git diff --name-only --diff-filter=ACM "$FROM" "$TO")
fi

if [ -z "$FILES" ]; then
    echo "Keine geänderten Dateien gefunden."
    exit 0
fi

# ── Ignorier-Liste ───────────────────────────────────────────
IGNORE_PATTERNS=(
    "^scripts/"
    "^crawl/"
    "^\.git"
    "^\.env"
    "README"
    "\.sh$"
    "\.json$"
    "\.md$"
)

# ── Upload ───────────────────────────────────────────────────
COUNT=0
FAIL_COUNT=0

echo ""
echo "════════════════════════════════════════"
echo "  OMmatic FTP Deploy"
echo "  Host: $FTP_HOST"
echo "════════════════════════════════════════"
echo ""

while IFS= read -r file; do
    # Überspringe Ignore-Patterns
    skip=0
    for pattern in "${IGNORE_PATTERNS[@]}"; do
        if echo "$file" | grep -qE "$pattern"; then
            skip=1; break
        fi
    done
    [ "$skip" = "1" ] && continue

    # Überspringe gelöschte Dateien
    [ ! -f "$file" ] && continue

    # Remote-Pfad aufbauen
    remote_path="${FTP_REMOTE_ROOT}${file}"

    # Upload via curl
    result=$(curl -s \
        --user "${FTP_USER}:${FTP_PASS}" \
        -T "$file" \
        "ftp://${FTP_HOST}${remote_path}" \
        --ftp-create-dirs \
        --connect-timeout 10 \
        --max-time 30 \
        -w "%{http_code}" 2>&1)

    exit_code=$?
    if [ $exit_code -eq 0 ]; then
        ok "$file"
        ((COUNT++))
    else
        fail "$file (Exit: $exit_code)"
        ((FAIL_COUNT++))
    fi

done <<< "$FILES"

echo ""
echo "════════════════════════════════════════"
echo -e "  Ergebnis: ${GREEN}${COUNT} OK${NC} | ${RED}${FAIL_COUNT} FEHLER${NC}"
echo "════════════════════════════════════════"
echo ""

if [ "$FAIL_COUNT" -gt 0 ]; then
    exit 1
fi
