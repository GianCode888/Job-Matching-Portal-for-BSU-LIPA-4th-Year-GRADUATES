<?php
// session_start();
// include ('database_management.php');

// if(!isset($_SESSION['recruiter_id'])){
//     header('location:login.php');
//     exit();
// }

// $recruiter_id = $_SESSION['recruiter_id'];

// $sql = "SELECT * FROM recruiters WHERE id = :recruiter_id";
// $stmt->bindparam(':recruiter_id', $recruiter_id, PDO::PARAM_INT);
// $stmt->$pdo->prepare($sql);
// $stmt->execute([$recruiter_id]);
// $recruiter = $stmt->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Dashboard</title>
</head>
<body>
    
<h1>Welcome to your dashboard <?php //echo ($recruiter['recruiter_name'])?> </h1>

<h2>Dashboard</h2>
<ul class = dashboard_list>
<li><a href="pfp_update.php">Update Profile</a></li>
<li><a href="job_posting.php">Post a Job</a></li>
<li><a href="posted_job.php">View Posted Job</a></li>
<li><a href="applications.php">View Applications</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</body>
</html>

