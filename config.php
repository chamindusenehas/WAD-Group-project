<?php
define('DB_HOST', 'wad-group-project.ct0ymu2skjpy.ap-southeast-2.rds.amazonaws.com');
define('DB_USER', 'admin');
define('DB_PASS', 'Chami.19721');
define('DB_NAME', 'wad_db');
define('DB_PORT', 3306);

function getDB() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->set_charset("utf8mb4");
    return $conn;
}
?>