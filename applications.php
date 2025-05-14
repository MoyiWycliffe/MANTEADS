<?php
include "php/auth_login_checker.php";

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
    <title>Job Applications</title>
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

        .applications-list {
            margin-top: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
        }

        .application-item {
            background-color: #f9f9f9;
            margin: 10px 0;
            padding: 3px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .application-item h3 {
            margin: 0;
        }

        .application-actions a {
            padding: 8px 15px;
            text-decoration: none;
            color: white;
            background-color: #28a745;
            border-radius: 5px;
            margin-right: 10px;
        }

        .application-actions a.reject {
            background-color: #dc3545;
        }

        footer {
            background-color: #333;
            color: white;
            margin-top: 100px;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            position: fixed;
            bottom: 0;
        }
        @media(max-width:280px){
            .application-actions{
                display: grid;
            }
            .application-actions a{
                margin-top:20px;
                width: 50px;
            }
        }
        @media(max-width:610px){
        .application-item {
            background-color: #f9f9f9;
            margin: 10px 0;
            padding: 3px;
            border-radius: 5px;
            display: block;
            justify-content: space-between;
            align-items: center;
        }
        }
    </style>
</head>
<body>

<header>
    <h1><span>Hello, <?php include "php/welcome.php";?></strong> Welcome To Your </span>Employer Dashboard</h1>
    <p>Manage your job applications</p>
</header>

<div class="container">
    <section class="applications-list">
        <h2>Job Applications</h2>
        <div class="application-item">
            <div class="application-details">
                <h3>John Doe</h3>
                <p>Position Applied: Software Developer</p>
            </div>
            <div class="application-actions">
                <a href="#">Accept</a>
                <a href="#" class="reject">Reject</a>
            </div>
        </div>
        <div class="application-item">
            <div class="application-details">
                <h3>Jane Smith</h3>
                <p>Position Applied: Graphic Designer</p>
            </div>
            <div class="application-actions">
                <a href="#">Accept</a>
                <a href="#" class="reject">Reject</a>
            </div>
        </div>
        <!-- Add more applications as needed -->
    </section>
</div>

    <footer>
        <p>&copy; <strong id="Year"></strong> MANTEADS. All rights reserved.</p>
    <script>
      let d=new Date();
      let year=d.getFullYear();
      let month=d.getMonth();
      let date=d.getDate();
      let day=d.getDay();
      let DaysInAWeek=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
      let MonthInAYear=["January","February","March","April","May","June","July","August","September","October","November","December"];
      let today=DaysInAWeek[day]+" "+date+" "+MonthInAYear[month]+" "+year;
      document.getElementById('Year').textContent=today;
    </script>
    </footer>
</body>
</html>
