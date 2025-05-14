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
  <title>Job Seeker Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .profile-container {
      max-width: 800px;
      margin: 30px auto;
      background: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    .profile-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .profile-header h2 {
      margin: 0;
      color: #333;
    }

    .profile-pic {
      margin-top: 20px;
    }

    .profile-picture{
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .profile-details {
      line-height: 1.8;
    }

    .section-title {
      font-size: 18px;
      color: #555;
      margin-top: 25px;
      margin-bottom: 10px;
      border-bottom: 1px solid #ccc;
      padding-bottom: 5px;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    ul li {
      padding: 5px 0;
    }

    .btn {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      text-align: center;
    }

    .btn:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <div class="profile-container">
    <div class="profile-header">
      <div class="profile-pic"><img src="Mylogo.jpg" alt="Profile Picture" class="profile-picture"></div>
      <h2><?php include "php/welcome.php";?></h2>
      <p><strong>Software Developer | Frontend & Backend</strong></p>
    </div>

    <div class="profile-details">
      <div>
        <div class="section-title">Personal Information</div>
        <ul>
          <li><strong>Email:</strong> jane.doe@example.com</li>
          <li><strong>Phone:</strong> +254 700 123456</li>
          <li><strong>Location:</strong> Nairobi, Kenya</li>
          <li><strong>Date of Birth:</strong> March 10, 1998</li>
        </ul>
      </div>

      <div>
        <div class="section-title">Skills</div>
        <ul>
          <li>HTML, CSS, JavaScript</li>
          <li>PHP & MySQL</li>
          <li>Python (Django/Flask)</li>
          <li>Version Control (Git/GitHub)</li>
        </ul>
      </div>

      <div>
        <div class="section-title">Education</div>
        <ul>
          <li>BSc in Computer Science – University of Nairobi (2017–2021)</li>
        </ul>
      </div>

      <div>
        <div class="section-title">Experience</div>
        <ul>
          <li>Frontend Developer Intern – XYZ Company (Jan 2022 - Dec 2022)</li>
          <li>Freelance Web Developer – Upwork & Fiverr (2023 - Present)</li>
        </ul>
      </div>

      <div>
        <div class="section-title">Languages</div>
        <ul>
          <li>English – Fluent</li>
          <li>Kiswahili – Fluent</li>
        </ul>
      </div>

      <a href="resume.pdf" class="btn" download>Download Resume</a>
    </div>
  </div>
</body>
</html>
