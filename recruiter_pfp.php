<?php
$session_start();
include ('database_management.php');

if(!isset($_SESSION['recruiter_id'])){
    header ("Location:login.php");
    exit;
}

$recruiter_id = $_SESSION['recruiter_id'];

$sql = "SELECT * FROM recruiters WHERE id = :recruiter_id";
$stmt = $pdo->prepare($sql);
$stmt->bindparam(':recruiter_id', $recruiter_id, PDO::PARAM_INT);
$stmt->execute([$recruiter_id]);
$recruiter = $stmt->fetch();

if(!$recruiter_id){
    echo "Recruiter not found";
    exit;
}
?>