<?php
// session_start();
// include('database_management.php');

// if (!isset($_SESSION['recruiter_id'])) {
//     header('location: login.php');
//     exit();
// }

// $recruiter_id = $_SESSION['recruiter_id'];

// $sql = "SELECT * FROM recruiters WHERE recruiter_id = :recruiter_id";
// $stmt = $pdo->prepare($sql);
// $stmt->bindParam(':recruiter_id', $recruiter_id, PDO::PARAM_INT);
// $stmt->execute();
// $recruiter = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Job</title>
</head>
<body>
    <h1>Post a Job Offer!</h1>
    
    <form action="posted_job.php" method="POST">
        <label for="job_title">Job Title:</label>
        <input type="text" id="job_title" name="job_title" placeholder="Enter job title" required>

        <label for="description">Job Description:</label>
        <textarea id="description" name="description" placeholder="Enter job description" required></textarea>

        <label for="company_name">Company Name:</label>
        <input type="text" id="company_name" name="company_name" required>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" placeholder="Enter job location (City, Remote, Hybrid)" required>

        <label for="job_type">Job Type:</label>
        <select id="job_type" name="job_type" required>
            <option value="Full-time">Full-time</option>
            <option value="Part-time">Part-time</option>
            <option value="Internship">Internship</option>
            <option value="Contract">Contract</option>
        </select>

        <label for="salary">Salary (Optional):</label>
        <input type="text" id="salary" name="salary" placeholder="Enter salary (Optional)">

        <label for="requirements">Requirements/Qualifications:</label>
        <textarea id="requirements" name="requirements" placeholder="List qualifications and requirements" required></textarea>

        <label for="deadline">Application Deadline:</label>
        <input type="date" id="deadline" name="deadline" required>

        <button type="submit">Post Job</button>
    </form>

</body>
</html>
