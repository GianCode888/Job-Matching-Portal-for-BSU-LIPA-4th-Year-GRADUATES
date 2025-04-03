<?php
session_start();
require_once ('../database_management.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['job_title'], $_POST['job_description'], $_POST['company_name'], 
              $_POST['location'], $_POST['job_type'], $_POST['salary'], $_POST['requirements'], 
              $_POST['status'], $_POST['posted_at'])) {
        
        $job_title = trim($_POST['job_title']);
        $job_description = trim($_POST['job_description']);
        $company_name = trim($_POST['company_name']);
        $location = trim($_POST['location']);
        $job_type = trim($_POST['job_type']);
        $salary = trim($_POST['salary']);
        $requirements = trim($_POST['requirements']);
        $status = trim($_POST['status']);
        $posted_at = trim($_POST['posted_at']);

        try {
            $sql = "INSERT INTO job_posts (job_title, job_description, company_name, location, job_type, salary, requirements, status, posted_at) 
                    VALUES (:job_title, :job_description, :company_name, :location, :job_type, :salary, :requirements, :status, :posted_at)";
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':job_title', $job_title, PDO::PARAM_STR);
            $stmt->bindParam(':job_description', $job_description, PDO::PARAM_STR);
            $stmt->bindParam(':company_name', $company_name, PDO::PARAM_STR);
            $stmt->bindParam(':location', $location, PDO::PARAM_STR);
            $stmt->bindParam(':job_type', $job_type, PDO::PARAM_STR);
            $stmt->bindParam(':salary', $salary, PDO::PARAM_STR);
            $stmt->bindParam(':requirements', $requirements, PDO::PARAM_STR);
            $stmt->bindParam(':status', $status, PDO::PARAM_STR);
            $stmt->bindParam(':posted_at', $posted_at, PDO::PARAM_STR);
            
            if ($stmt->execute()) {
                header("Location: job_posting.php?success=1");
                exit();
            } else {
                echo "Error posting the job.";
            }
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>
