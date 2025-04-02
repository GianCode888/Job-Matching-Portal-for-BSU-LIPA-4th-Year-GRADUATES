<?php
// session_start();
// include ('database_management.php');

// if(!isset($_SESSION['recruiter_id'])){
//     header('location: log_in.php');
//     exit;
// }

// $recruiter_id = $_SESSION['recruiter_id'];

// $sql = "SELECT * FROM recruiters WHERE recruiter_id = :recruiter_id";
// $stmt = $pdo->prepare($sql);
// $stmt->bindparam(':recruiter_id', $recruiter_id, PDO::PARAM_INT);
// $stmt->execute([$recruiter_id]);
// $recruiter = $stmt->fetch();

// if (!$recruiter) {
//     echo "Recruiter not found!";
//     exit;
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $company_name = $_POST['company_name'];
//     $recruiter_name = $_POST['recruiter_name'];
//     $username = $_POST['username'];
//     $industry = $_POST['industry'];
//     $location = $_POST['location'];

//     $sql = "UPDATE recruiters SET company_name = :company_name, recruiter_name = :recruiter_name, username = :username, industry = :industry, location = :location WHERE recruiter_id = :recruiter_id";
//     $stmt = $pdo->prepare($sql);
//     $stmt->bindParam(':company_name', $company_name, PDO::PARAM_STR);
//     $stmt->bindParam(':recruiter_name', $recruiter_name, PDO::PARAM_STR);
//     $stmt->bindParam(':username', $username, PDO::PARAM_STR);
//     $stmt->bindParam(':industry', $industry, PDO::PARAM_STR);
//     $stmt->bindParam(':location', $location, PDO::PARAM_STR);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating Your Profile</title>
</head>
<body>
    <h1>Update your profile here!</h1>
    <form>
        <Label for = company_name>Company Name:</Label>
        <input type="text" name="company_name" placeholder="Your company name">
        <Label for = recruiter_name>Recruiter Name:</Label>
        <input type="text" name="recruiter_name" placeholder="Your name">
        <Label for = username>Username:</Label>
        <input type="text" name="username" placeholder="Your username">
        <Label for = industry>Industry name:</Label>
        <input type="text" name="industry" placeholder="Your indutry name">
        <Label for = location>Location:</Label>
        <input type="text" name="location" placeholder="Location">


    </form>
</body>
</html>