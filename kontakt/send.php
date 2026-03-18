<?php
/**
 * OMmatic Kontaktformular – Server-Side Handler
 * Empfänger: info@ommatic.de
 * DSGVO-konform: nur bei Consent-Checkbox
 * Honeypot + Rate Limiting via Session
 */

declare(strict_types=1);

// ── Konfiguration ──────────────────────────────────────────
define('RECIPIENT_EMAIL', 'info@ommatic.de');
define('RECIPIENT_NAME',  'OMmatic GmbH');
define('FROM_EMAIL',      'noreply@ommatic.de');
define('SUBJECT_PREFIX',  '[ommatic.de Kontakt]');
define('RATE_LIMIT_SECS', 60);    // Max. 1 Anfrage pro Minute pro Session
define('SUCCESS_URL',     '../kontakt/danke/');

// ── Session starten ────────────────────────────────────────
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ── Nur POST erlauben ──────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method Not Allowed');
}

// ── CSRF-Origin-Prüfung (einfach) ─────────────────────────
$allowed_origins = ['https://ommatic.de', 'https://www.ommatic.de', 'https://2026.ommatic.net'];
$origin = $_SERVER['HTTP_ORIGIN'] ?? $_SERVER['HTTP_REFERER'] ?? '';
$origin_ok = false;
foreach ($allowed_origins as $ao) {
    if (str_starts_with($origin, $ao)) {
        $origin_ok = true;
        break;
    }
}
if (!$origin_ok) {
    http_response_code(403);
    exit('Forbidden');
}

// ── Honeypot-Prüfung ──────────────────────────────────────
// Das Honeypot-Feld (name="website") muss leer sein.
if (!empty($_POST['website'])) {
    // Bot erkannt – still abbrechen, kein Hinweis geben
    header('Location: ' . SUCCESS_URL);
    exit;
}

// ── Rate Limiting ──────────────────────────────────────────
$last_submit = $_SESSION['last_contact_submit'] ?? 0;
if ((time() - $last_submit) < RATE_LIMIT_SECS) {
    $back = $_SERVER['HTTP_REFERER'] ?? '../kontakt/';
    header('Location: ' . $back . '?error=rate_limit');
    exit;
}

// ── DSGVO-Consent prüfen ───────────────────────────────────
if (empty($_POST['f-dsgvo']) || $_POST['f-dsgvo'] !== '1') {
    $back = $_SERVER['HTTP_REFERER'] ?? '../kontakt/';
    header('Location: ' . $back . '?error=dsgvo');
    exit;
}

// ── Eingaben bereinigen ────────────────────────────────────
function clean(string $value): string {
    return htmlspecialchars(strip_tags(trim($value)), ENT_QUOTES, 'UTF-8');
}

$name    = clean($_POST['f-name']    ?? '');
$email   = filter_var(trim($_POST['f-email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone   = clean($_POST['f-phone']   ?? '');
$subject = clean($_POST['f-subject'] ?? 'Kontaktanfrage');
$message = clean($_POST['f-message'] ?? '');

// ── Pflichtfelder validieren ───────────────────────────────
$errors = [];
if (empty($name))    $errors[] = 'Name fehlt';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'E-Mail ungültig';
if (empty($message)) $errors[] = 'Nachricht fehlt';

if (!empty($errors)) {
    $back = $_SERVER['HTTP_REFERER'] ?? '../kontakt/';
    header('Location: ' . $back . '?error=validation');
    exit;
}

// ── E-Mail aufbauen ────────────────────────────────────────
$mail_subject = SUBJECT_PREFIX . ' ' . $subject . ' – ' . $name;

$mail_body  = "Neue Kontaktanfrage von ommatic.de\n";
$mail_body .= str_repeat('─', 50) . "\n\n";
$mail_body .= "Name:     {$name}\n";
$mail_body .= "E-Mail:   {$email}\n";
if (!empty($phone)) {
    $mail_body .= "Telefon:  {$phone}\n";
}
$mail_body .= "Betreff:  {$subject}\n\n";
$mail_body .= "Nachricht:\n{$message}\n\n";
$mail_body .= str_repeat('─', 50) . "\n";
$mail_body .= "Gesendet am: " . date('d.m.Y H:i:s') . " Uhr\n";
$mail_body .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unbekannt') . "\n";
$mail_body .= "DSGVO-Consent: Ja (Checkbox gesetzt)\n";

// ── Mail-Header ────────────────────────────────────────────
$headers  = "From: " . FROM_EMAIL . "\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

// ── Senden ─────────────────────────────────────────────────
$sent = mail(
    RECIPIENT_EMAIL,
    '=?UTF-8?B?' . base64_encode($mail_subject) . '?=',
    $mail_body,
    $headers
);

if ($sent) {
    // Rate-Limit-Timer setzen
    $_SESSION['last_contact_submit'] = time();

    // Auto-Antwort an Absender
    $auto_subject = '=?UTF-8?B?' . base64_encode('Ihre Anfrage bei OMmatic – wir melden uns!') . '?=';
    $auto_body  = "Hallo {$name},\n\n";
    $auto_body .= "vielen Dank für Ihre Anfrage! Wir haben Ihre Nachricht erhalten\n";
    $auto_body .= "und melden uns in Kürze bei Ihnen.\n\n";
    $auto_body .= "Mit freundlichen Grüßen\n";
    $auto_body .= "Ihr OMmatic-Team\n\n";
    $auto_body .= "──────────────────────────────\n";
    $auto_body .= "OMmatic GmbH\n";
    $auto_body .= "https://ommatic.de\n";
    $auto_body .= "info@ommatic.de\n";

    $auto_headers  = "From: " . RECIPIENT_NAME . " <" . FROM_EMAIL . ">\r\n";
    $auto_headers .= "MIME-Version: 1.0\r\n";
    $auto_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    mail($email, $auto_subject, $auto_body, $auto_headers);

    header('Location: ' . SUCCESS_URL);
    exit;
} else {
    $back = $_SERVER['HTTP_REFERER'] ?? '../kontakt/';
    header('Location: ' . $back . '?error=mail');
    exit;
}
