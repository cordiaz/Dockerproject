<?php
// MUTE NOTICES
error_reporting(E_ALL & ~E_NOTICE);
 
// DATABASE SETTINGS - CHANGE THESE TO YOUR OWN
define('DB_HOST', 'dbsosmed.ctlbp5ydqfe5.ap-east-1.rds.amazonaws.com');
define('DB_NAME', 'db_guestbook');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'admin');
define('DB_PASSWORD', '1234567890');

// AUTO - FILE PATH
define('PATH_LIB', __DIR__ . DIRECTORY_SEPARATOR);
?>
