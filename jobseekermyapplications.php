<?php
include "php/auth_login_checker.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Browse thousands of jobs and apply online easily on MANTEADS platform.">
  <meta name="author" content="MANTEADS">
  <meta name="keywords" content="jobs, career, apply online, job search,Fill Surveys,Complete microtasks and offerwalls.">
   <link rel="icon" type="image/png" href="favicon.png">
  <title>My Applications - Job Seeker</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .applications-container {
      max-width: 1000px;
      margin: 30px auto;
      background: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    .applications-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .applications-header h2 {
      margin: 0;
      color: #333;
    }

    .applications-header p {
      color: #777;
    }

    .application-list {
      margin-top: 30px;
    }

    .application-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
      border-bottom: 1px solid #ddd;
    }

    .application-item:last-child {
      border-bottom: none;
    }

    .application-item h4 {
      margin: 0;
      color: #007bff;
    }

    .application-item p {
      margin: 5px 0;
      color: #555;
    }

    .application-item .status {
      font-weight: bold;
    }

    .status-pending {
      color: #ffc107;
    }

    .status-interview {
      color: #28a745;
    }

    .status-rejected {
      color: #dc3545;
    }

    .status-offer {
      color: #007bff;
    }

    .application-item .view-details-btn {
      padding: 8px 15px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }

    .application-item .view-details-btn:hover {
      background-color: #0056b3;
    }

    .back-btn {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #6c757d;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }

    .back-btn:hover {
      background-color: #5a6268;
    }
  </style>
</head>
<body>
  <div class="applications-container">
    <div class="applications-header">
      <h2>My Applications, <?php include "php/welcome.php";?></h2>
      <p>View the status of the jobs you’ve applied for and manage your applications.</p>
    </div>

    <div class="application-list">
      <!-- Example Application 1 -->
      <div class="application-item">
        <div>
          <h4>Frontend Developer</h4>
          <p>Company: XYZ Tech</p>
          <p>Location: Nairobi, Kenya</p>
        </div>
        <div>
          <p class="status status-pending">Status: Pending</p>
          <a href="#" class="view-details-btn">View Details</a>
        </div>
      </div>

      <!-- Example Application 2 -->
      <div class="application-item">
        <div>
          <h4>Backend Developer</h4>
          <p>Company: ABC Corp</p>
          <p>Location: Nairobi, Kenya</p>
        </div>
        <div>
          <p class="status status-interview">Status: Interview Scheduled</p>
          <a href="#" class="view-details-btn">View Details</a>
        </div>
      </div>

      <!-- Example Application 3 -->
      <div class="application-item">
        <div>
          <h4>Full Stack Developer</h4>
          <p>Company: DEF Solutions</p>
          <p>Location: Nairobi, Kenya</p>
        </div>
        <div>
          <p class="status status-rejected">Status: Rejected</p>
          <a href="#" class="view-details-btn">View Details</a>
        </div>
      </div>

      <!-- Example Application 4 -->
      <div class="application-item">
        <div>
          <h4>Software Engineer</h4>
          <p>Company: GHI Technologies</p>
          <p>Location: Nairobi, Kenya</p>
        </div>
        <div>
          <p class="status status-offer">Status: Offer Received</p>
          <a href="#" class="view-details-btn">View Details</a>
        </div>
      </div>

    </div>

    <a href="jobseekerdashboard.php" class="back-btn">Back to Dashboard</a>
  </div>
</body>
</html>
