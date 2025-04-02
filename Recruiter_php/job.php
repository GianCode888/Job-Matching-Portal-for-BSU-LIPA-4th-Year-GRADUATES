<?php
session_start();
include ('database_management.php');

if(!isset($_SESSION['recruiter_id'])){
    header('location: login.php');
    exit();
}

$recruiter_id = $SESSION['recruiter_id'];

$sql = "SELECT * FROM recruiters WHERE recruiter_id = :recruiter_id";
$stmt->bindparam(':recruiter_id,', $recruiter_id, PDO::PARAM_INT);
$stmt->$pdo->execute();
$recruiter = $stmt->fetch();
?>