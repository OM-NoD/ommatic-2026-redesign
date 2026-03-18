<?php
/**
 * OMmatic Formular-Handler
 *
 * Unterstützte Formular-Typen (form_type):
 *   (leer)        → Standard-Kontaktformular  (Felder: f-name, f-email, …)
 *   partnerschaft → Partnerschaftsanfrage      (Felder: name, email, unternehmen, …)
 *   bewerbung     → Bewerbungsformular         (Felder: vorname, nachname, email, …)
 *
 * Features: Honeypot, Rate-Limit, DSGVO-Consent, CSRF-Origin, Auto-Reply
 */

declare(strict_types=1);

// ── Konfiguration ───────────────────────────────────────────
define('RECIPIENT_EMAIL', 'hallo@ommatic.de');
define('RECIPIENT_NAME',  'OMmatic GmbH');
define('FROM_EMAIL',      'noreply@ommatic.de');
define('SUBJECT_PREFIX',  '[ommatic.de]');
define('RATE_LIMIT_SECS', 60);
define('SUCCESS_URL',     '/kontakt/danke/');

// ── Session ─────────────────────────────────────────────────
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ── Nur POST ────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method Not Allowed');
}

// ── CSRF-Origin ─────────────────────────────────────────────
$allowed_origins = [
    'https://ommatic.de',
    'https://www.ommatic.de',
    'https://2026.ommatic.net',
];
$origin    = $_SERVER['HTTP_ORIGIN'] ?? $_SERVER['HTTP_REFERER'] ?? '';
$origin_ok = false;
foreach ($allowed_origins as $ao) {
    if (str_starts_with($origin, $ao)) { $origin_ok = true; break; }
}
if (!$origin_ok) {
    http_response_code(403);
    exit('Forbidden');
}

// ── Honeypot ────────────────────────────────────────────────
// Neue Formulare: name="honeypot" | altes Kontaktformular: name="website"
$hp_new = trim($_POST['honeypot'] ?? '');
$hp_old = trim($_POST['website']  ?? '');
if ($hp_new !== '' || $hp_old !== '') {
    header('Location: ' . SUCCESS_URL);   // Bot – still abbrechen
    exit;
}

// ── Rate-Limit ───────────────────────────────────────────────
$last = $_SESSION['last_contact_submit'] ?? 0;
if ((time() - $last) < RATE_LIMIT_SECS) {
    $back = $_SERVER['HTTP_REFERER'] ?? '/kontakt/';
    header('Location: ' . $back . '?error=rate_limit');
    exit;
}

// ── Hilfsfunktionen ─────────────────────────────────────────
function clean(string $v): string {
    return htmlspecialchars(strip_tags(trim($v)), ENT_QUOTES, 'UTF-8');
}
function back_error(string $code): never {
    $back = $_SERVER['HTTP_REFERER'] ?? '/kontakt/';
    header('Location: ' . $back . '?error=' . $code);
    exit;
}
function send_mail(string $to, string $subject, string $body, string $reply_to = ''): bool {
    $headers  = 'From: ' . FROM_EMAIL . "\r\n";
    if ($reply_to) {
        $headers .= "Reply-To: {$reply_to}\r\n";
    }
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $enc_subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
    return mail($to, $enc_subject, $body, $headers);
}
function auto_reply(string $to_email, string $to_name, string $context = ''): void {
    $subject = 'Ihre Anfrage bei OMmatic – wir melden uns!';
    $body    = "Hallo {$to_name},\n\n";
    $body   .= "vielen Dank für Ihre Anfrage";
    if ($context) $body .= " ({$context})";
    $body   .= "!\nWir haben Ihre Nachricht erhalten und melden uns in Kürze.\n\n";
    $body   .= "Mit freundlichen Grüßen\n";
    $body   .= "Ihr OMmatic-Team\n\n";
    $body   .= "──────────────────────────────\n";
    $body   .= "OMmatic GmbH · hallo@ommatic.de · https://ommatic.de\n";
    send_mail($to_email, $subject, $body);
}

$form_type = clean($_POST['form_type'] ?? '');
$line      = str_repeat('─', 50);
$sent_at   = date('d.m.Y H:i:s');
$ip        = $_SERVER['REMOTE_ADDR'] ?? 'unbekannt';

// ════════════════════════════════════════════════════════════
//  PARTNERSCHAFTSANFRAGE
// ════════════════════════════════════════════════════════════
if ($form_type === 'partnerschaft') {

    // DSGVO
    if (empty($_POST['dsgvo'])) back_error('dsgvo');

    // Felder
    $name             = clean($_POST['name']             ?? '');
    $unternehmen      = clean($_POST['unternehmen']      ?? '');
    $email            = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $website_url      = clean($_POST['website']          ?? '');   // echter URL-Wert
    $telefon          = clean($_POST['telefon']          ?? '');
    $partnerschaftsart= clean($_POST['partnerschaftsart'] ?? '');
    $nachricht        = clean($_POST['nachricht']        ?? '');

    // Validierung
    if (empty($name))   back_error('validation');
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) back_error('validation');

    // Mail aufbauen
    $subject = SUBJECT_PREFIX . ' Partnerschaftsanfrage – ' . $name . ' / ' . $unternehmen;
    $body    = "Neue Partnerschaftsanfrage von 2026.ommatic.net\n{$line}\n\n";
    $body   .= "Name:              {$name}\n";
    $body   .= "Unternehmen:       {$unternehmen}\n";
    $body   .= "E-Mail:            {$email}\n";
    if ($telefon)          $body .= "Telefon:           {$telefon}\n";
    if ($website_url)      $body .= "Website:           {$website_url}\n";
    if ($partnerschaftsart)$body .= "Partnerschaftsart: {$partnerschaftsart}\n";
    if ($nachricht)        $body .= "\nNachricht:\n{$nachricht}\n";
    $body   .= "\n{$line}\n";
    $body   .= "Gesendet:  {$sent_at}\nIP:        {$ip}\nDSGVO:     Ja\n";

    $ok = send_mail(RECIPIENT_EMAIL, $subject, $body, $email);
    if ($ok) {
        $_SESSION['last_contact_submit'] = time();
        auto_reply($email, $name, 'Partnerschaftsanfrage');
        header('Location: ' . SUCCESS_URL);
        exit;
    }
    back_error('mail');
}

// ════════════════════════════════════════════════════════════
//  BEWERBUNG
// ════════════════════════════════════════════════════════════
if ($form_type === 'bewerbung') {

    // DSGVO
    if (empty($_POST['dsgvo'])) back_error('dsgvo');

    // Felder
    $vorname       = clean($_POST['vorname']       ?? '');
    $nachname      = clean($_POST['nachname']      ?? '');
    $email         = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $telefon       = clean($_POST['telefon']       ?? '');
    $stelle        = clean($_POST['stelle']        ?? '');
    $starttermin   = clean($_POST['starttermin']   ?? '');
    $motivation    = clean($_POST['motivation']    ?? '');
    $portfolio_url = clean($_POST['portfolio_url'] ?? '');
    $full_name     = trim($vorname . ' ' . $nachname);

    // Validierung
    if (empty($vorname) || empty($nachname)) back_error('validation');
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) back_error('validation');
    if (empty($motivation))                  back_error('validation');

    // Mail aufbauen
    $subject = SUBJECT_PREFIX . ' Bewerbung – ' . $stelle . ' – ' . $full_name;
    $body    = "Neue Bewerbung von 2026.ommatic.net\n{$line}\n\n";
    $body   .= "Name:         {$full_name}\n";
    $body   .= "E-Mail:       {$email}\n";
    if ($telefon)      $body .= "Telefon:      {$telefon}\n";
    if ($stelle)       $body .= "Stelle:       {$stelle}\n";
    if ($starttermin)  $body .= "Start:        {$starttermin}\n";
    if ($portfolio_url)$body .= "Portfolio:    {$portfolio_url}\n";
    $body   .= "\nMotivationsschreiben:\n{$motivation}\n";
    $body   .= "\n{$line}\n";
    $body   .= "Gesendet:  {$sent_at}\nIP:        {$ip}\nDSGVO:     Ja\n";

    $ok = send_mail(RECIPIENT_EMAIL, $subject, $body, $email);
    if ($ok) {
        $_SESSION['last_contact_submit'] = time();
        auto_reply($email, $vorname, 'Bewerbung');
        header('Location: ' . SUCCESS_URL);
        exit;
    }
    back_error('mail');
}

// ════════════════════════════════════════════════════════════
//  STANDARD-KONTAKTFORMULAR (kein / unbekannter form_type)
// ════════════════════════════════════════════════════════════

// DSGVO
if (empty($_POST['f-dsgvo']) || $_POST['f-dsgvo'] !== '1') back_error('dsgvo');

// Felder
$name    = clean($_POST['f-name']    ?? '');
$email   = filter_var(trim($_POST['f-email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone   = clean($_POST['f-phone']   ?? '');
$subject = clean($_POST['f-subject'] ?? 'Kontaktanfrage');
$message = clean($_POST['f-message'] ?? '');

// Validierung
if (empty($name))    back_error('validation');
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) back_error('validation');
if (empty($message)) back_error('validation');

// Mail aufbauen
$mail_subject = SUBJECT_PREFIX . ' ' . $subject . ' – ' . $name;
$body  = "Neue Kontaktanfrage von ommatic.de\n{$line}\n\n";
$body .= "Name:     {$name}\n";
$body .= "E-Mail:   {$email}\n";
if ($phone) $body .= "Telefon:  {$phone}\n";
$body .= "Betreff:  {$subject}\n\n";
$body .= "Nachricht:\n{$message}\n\n";
$body .= "{$line}\n";
$body .= "Gesendet:  {$sent_at}\nIP:        {$ip}\nDSGVO:     Ja\n";

$ok = send_mail(RECIPIENT_EMAIL, $mail_subject, $body, $email);
if ($ok) {
    $_SESSION['last_contact_submit'] = time();
    auto_reply($email, $name);
    header('Location: ' . SUCCESS_URL);
    exit;
}
back_error('mail');
