<?php
include "php/auth_login_checker.php";
include "php/Database.php";

$Email = $_SESSION['Email'];
$Role=$_SESSION['ROLE'];
$allowed_Roles = ['Employer'];

if (!in_array($Role, $allowed_Roles)){
  header("Location:index.php");
  exit();
}
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
    <title>Manage Jobs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            margin-bottom: 100px;
        }

        .job-list {
            margin-top: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
        }

        .job-item {
            background-color: #f9f9f9;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .job-item h3 {
            margin: 0;
        }

        .job-actions a {
            padding: 8px 15px;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            border-radius: 5px;
            margin-right: 10px;
        }

        .job-actions a.delete {
            background-color: #dc3545;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        @media(max-width:500px){
            .job-actions{
                display: grid;
                grid-template-columns: 1fr;
                height: 90px;
            }
            .job-actions a{
                margin-top: 5px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1><span>Hello, <?php include "php/welcome.php";?></strong> Welcome To Your </span>Employer Dashboard</h1>
    <p>Manage your job listings</p>
</header>

<div class="container">
    <section class="job-list">
        <h2>Current Job Listings</h2>
        <div class="job-item">
            <div class="job-details">
                <h3>Software Developer</h3>
                <p>Location: Nairobi</p>
            </div>
            <div class="job-actions">
                <a href="#">Edit</a>
                <a href="#" class="delete">Delete</a>
            </div>
        </div>
        <div class="job-item">
            <div class="job-details">
                <h3>Graphic Designer</h3>
                <p>Location: Mombasa</p>
            </div>
            <div class="job-actions">
                <a href="#">Edit</a>
                <a href="#" class="delete">Delete</a>
            </div>
        </div>
        <!-- Add more job listings as needed -->
    </section>
</div>

<footer>
    <p>&copy; <strong id="Year"></strong> All Rights Reserved.Job Portal</p>
    <script>
      let d=new Date();
      let year=d.getFullYear();
      let month=d.getMonth();
      let date=d.getDate();
      let day=d.getDay();
      let DaysInAWeek=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
      let MonthInAYear=["January","February","March","April","May","June","July","August","September","October","November","December"];
      let today=/*DaysInAWeek[day]+" "+date+" "+MonthInAYear[month]+" "+*/year;
      document.getElementById('Year').textContent=today;
    </script>
</footer>

</body>
</html>
