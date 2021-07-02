<?php
$server = 'localhost';
$username = 'root';
$password = 'takes15897';
$database = 'tienda_holbi';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
}
?>