<?php

session_start();


/**  DATABASE CONFIGURATION Begin * */
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'tare_control');
define('DB_USER', 'root');
define('DB_PASS', '');
/**  DATABASE CONFIGURATION End * */

/**  DATABASE CONNECTION-STRING Begin* */
    $conn = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/**  DATABASE CONNECTION-STRING End* */

/** SITE CONFIGURATION  Begin * */
define('BASE_URL', 'http://localhost/ejournal/');
define('LOCAL_PATH', 'C:/\xampp/\htdocs/\ejournal/\/');
/** SITE CONFIGURATION  End * */

require_once 'template.php';
?>