<?php
// session_start();
// include('database_management.php');

// if (!isset($_SESSION['recruiter_id'])) {
//     header('location: login.php');
//     exit();
// }

// if ($_SERVER["REQUEST_METHOD"] == 'POST') {
//     $company_name = $_POST['company_name'];
//     $job_title    = $_POST['job_title'];
//     $job_type     = $_POST['job_type'];
//     $location     = $_POST['location'];
//     $salary       = $_POST['salary'];
//     $description  = $_POST['description'];
//     $requirements = $_POST['requirements'];
//     $deadline     = $_POST['deadline'];
//     $recruiter_id = $_SESSION['recruiter_id'];

//     $sql = "INSERT INTO job_posts (recruiter_id, job_title, description, company_name, location, job_type, salary, requirements, deadline) 
//             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

//     $stmt = $pdo->prepare($sql);
//     $stmt->execute([$recruiter_id, $job_title, $description, $company_name, $location, $job_type, $salary, $requirements, $deadline]);

//     $sql = "SELECT * FROM job_posts WHERE recruiter_id = :recruiter_id ORDER BY created_at DESC LIMIT 1";
//     $stmt = $pdo->prepare($sql);
//     $stmt->bindParam(':recruiter_id', $recruiter_id, PDO::PARAM_INT);
//     $stmt->execute();
//     $posted_job = $stmt->fetch();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posted Job</title>
</head>
<body>
    <h2>Posted Job Details:</h2>
    <table>
        <tr>
            <th>Job Title</th>
            <th>Company Name</th>
            <th>Location</th>
            <th>Job Type</th>
            <th>Salary</th>
            <th>Description</th>
            <th>Requirements</th>
            <th>Deadline</th>
        </tr>
        <tr>
            <!-- <td><?php echo htmlspecialchars($posted_job['job_title']); ?></td>
            <td><?php echo htmlspecialchars($posted_job['company_name']); ?></td>
            <td><?php echo htmlspecialchars($posted_job['location']); ?></td>
            <td><?php echo htmlspecialchars($posted_job['job_type']); ?></td>
            <td><?php echo htmlspecialchars($posted_job['salary']); ?></td>
            <td><?php echo htmlspecialchars($posted_job['description']); ?></td>
            <td><?php echo htmlspecialchars($posted_job['requirements']); ?></td>
            <td><?php echo htmlspecialchars($posted_job['deadline']); ?></td> -->
        </tr>
    </table>
</body>
</html>
