<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "account_management";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $user, $pass); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
