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
  <title>Job Seeker Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .dashboard-container {
      max-width: 1000px;
      margin: 30px auto;
      background: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    .dashboard-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .dashboard-header h2 {
      margin: 0;
      color: #333;
    }

    .dashboard-header p {
      color: #777;
    }

    .dashboard-nav {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      font-size: 16px;
    }

    .dashboard-nav a {
      color: #007bff;
      text-decoration: none;
      padding: 5px 10px;
    }

    .dashboard-nav a:hover {
      background: #f1f1f1;
      border-radius: 5px;
    }

    .stat-box {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .stat-box div {
      background: #f1f1f1;
      padding: 20px;
      text-align: center;
      border-radius: 8px;
      width: 40%;
    }

    .stat-box div h3 {
      margin: 0;
      color: #007bff;
    }

    .stat-box div p {
      color: #333;
    }
    .stat-box button{
      padding: 8px 15px;
      background-color: blue;
      color: #fff;
      font-size: 1.2em;
      text-decoration: none;
      border-radius: 5px;
    }
    .stat-box button a{
      color: white;
      text-decoration: none;
    }
    .job-listings {
      margin-top: 30px;
    }

    .job-listing {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
      border-bottom: 1px solid #ddd;
    }

    .job-listing:last-child {
      border-bottom: none;
    }

    .job-listing h4 {
      margin: 0;
      color: #007bff;
    }

    .job-listing p {
      margin: 5px 0;
      color: #555;
    }

    .job-listing .apply-btn {
      padding: 8px 15px;
      background-color: #28a745;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }

    .job-listing .apply-btn:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
  <div class="dashboard-container">
    <div class="dashboard-header">
      <h2>Welcome, <?php include "php/welcome.php";?></h2>
      <p>Here's your dashboard, manage your profile and job applications here.</p>
    </div>

    <div class="dashboard-nav">
      <a href="jobseekerprofile.php">Profile</a>
      <a href="settings.php">Settings</a>
      <a href="logout.php">Logout</a>
    </div>

    <div class="stat-box">
      <div>
        <h3>Applications</h3>
        <p>5 Applied</p>
        <button><a href="jobseekermyapplications.php">View</a></button>
      </div>
      <div>
        <h3>Saved</h3>
        <p>2</p>
        <button>View</button>
      </div>

    </div>

    <div class="job-listings">
      <h3>Job Listings</h3>

      <!-- Example Job Listing 1 -->
      <div class="job-listing">
        <div>
          <h4>Frontend Developer</h4>
          <p>Company: XYZ Tech</p>
          <p>Location: Nairobi, Kenya</p>
        </div>
        <a href="#" class="apply-btn">Apply</a>
      </div>

      <!-- Example Job Listing 2 -->
      <div class="job-listing">
        <div>
          <h4>Full Stack Developer</h4>
          <p>Company: ABC Corp</p>
          <p>Location: Nairobi, Kenya</p>
        </div>
        <a href="#" class="apply-btn">Apply</a>
      </div>

      <!-- Example Job Listing 3 -->
      <div class="job-listing">
        <div>
          <h4>Software Engineer</h4>
          <p>Company: DEF Solutions</p>
          <p>Location: Nairobi, Kenya</p>
        </div>
        <a href="#" class="apply-btn">Apply</a>
      </div>

    </div>
  </div>
</body>
</html>
