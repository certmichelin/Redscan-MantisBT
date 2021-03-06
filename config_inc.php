<?php
$g_db_type               = 'mysqli';
$g_hostname              = getenv('MYSQL_HOST') !== false ? getenv('MYSQL_HOST') : 'db';
$g_database_name         = getenv('MYSQL_DATABASE') !== false ? getenv('MYSQL_DATABASE') : 'bugtracker';
$g_db_username           = getenv('MYSQL_USER') !== false ? getenv('MYSQL_USER') : 'mantis';
$g_db_password           = getenv('MYSQL_PASSWORD') !== false ? getenv('MYSQL_PASSWORD') : 'mantis';
$g_crypto_master_salt    = getenv('MASTER_SALT');
$g_webmaster_email       = getenv('EMAIL_WEBMASTER') !== false ? getenv('EMAIL_WEBMASTER') : null;
$g_from_email            = getenv('EMAIL_FROM') !== false ? getenv('EMAIL_FROM') : null;
$g_return_path_email     = getenv('EMAIL_RETURN_PATH') !== false ? getenv('EMAIL_RETURN_PATH') : null;
$g_path                  = getenv('BASE_URL') !== false ? getenv('BASE_URL') : "https://localhost/mantisbt/";
$g_short_path            = getenv('SHORT_PATH') !== false ? getenv('SHORT_PATH') : "/mantisbt/";

//Customize severity.
$g_severity_enum_string  = '1:Critical,2:High,3:Medium,4:Low,5:Info';

include 'config_inc_addon.php';
?>