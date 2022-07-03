<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    exit(' Erişim Engellendi.');
}

$host = "localhost";

$dbname = "bride_bride";

$user = "bride_bride";

$password = "eJRrU7ccLe";
try {
    $db = new PDO("mysql:host=" . $host . ";dbname=" . $dbname . ";charset=utf8", $user, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
}
