<?php
$host = 'localhost';
$user = 'root';
$password = ''; // Your KSWEB MySQL password if any
$database = 'todolist';

try {
    $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>