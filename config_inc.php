<?php
$g_hostname               = 'localhost';
$g_db_type                = 'mysqli';
$g_database_name          = 'bugtracker';
$g_db_username            = 'admin';
$g_db_password            = 'password';

$g_default_timezone       = 'UTC';

$g_crypto_master_salt     = 'LQ2pz6qAl0H4J17jWOq43JTach88SBH0BA8PYTIlVxI=';

# --- Anonymous Access / Signup ---
$g_allow_signup				= ON;
$g_allow_anonymous_login	= OFF;
$g_anonymous_account		= '';

# --- Email Configuration ---
$g_phpMailer_method		= PHPMAILER_METHOD_MAIL; # or PHPMAILER_METHOD_SMTP, PHPMAILER_METHOD_SENDMAIL
$g_smtp_host			= 'smtp.gmail.com';			# used with PHPMAILER_METHOD_SMTP
$g_smtp_username		= 'koffi.benian@gmail.com';					# used with PHPMAILER_METHOD_SMTP
$g_smtp_password		= 'Kaylan@nathan01';					# used with PHPMAILER_METHOD_SMTP
$g_webmaster_email      = 'webmaster@example.com';
$g_from_email           = 'noreply@example.com';	# the "From: " field in emails
$g_return_path_email    = 'admin@example.com';	# the return address for bounced mail
# $g_from_name			= 'Mantis Bug Tracker';
# $g_email_receive_own	= OFF;
# $g_email_send_using_cronjob = OFF;