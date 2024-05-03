<?php
$servername = 'localhost';
$dbname = 'nyongozi';
$dbuser = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbuser, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>