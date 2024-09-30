<?php
$dbhost = 'db';
$dbname = 'db';
$dbuser = 'user';
$dbpass = 'passwd';
try {
$dbcon = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
