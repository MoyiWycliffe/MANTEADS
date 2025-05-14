<?php
include "php/auth_login_checker.php";

$Email = $_SESSION['Email'];
$Role=$_SESSION['ROLE'];
$allowed_Roles = ['Employer'];
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
  <title>Employer Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f9f9f9;
    }
    nav {
      background: #222;
      color: white;
      padding: 15px;
      display: flex;
      width: 97vw;
      justify-content: space-between;
      align-items: center;
      gap: 25px;
    }
    nav .logo {
      font-size: 20px;
      font-weight: bold;
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 15px;
      margin: 0;
      width: 60%;
      padding: 0;
      justify-content: space-evenly;
    }
    nav a {
      color: white;
      text-decoration: none;
    }
    .container {
      padding: 20px;
    }
    .stats {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
    }
    .card {
      background: #fff;
      padding: 20px;
      flex: 1;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }
    .btn {
      background: green;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      display: inline-block;
      margin-bottom: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 8px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }
    th{
      text-align: center;
    }
    .actions a {
      margin-right: 10px;
      text-decoration: none;
      color: blue;
    }

    .profile, .notifications {
      margin-top: 30px;
      background: #fff;
      padding: 20px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }
    h2, h3 {
      margin-top: 0;
    }
    .profile{
      margin-bottom: 100px;
    }
    footer {
    text-align: center;
    background-color: #2c3e50;
    color: white;
    padding: 10px;
    position: fixed;
    width: 100%;
    bottom: 0;
    margin-top: 100px;
}
input{
 padding-left: 0;
 color:black;
 font-size: 18px;
 width: 75%;
 height: 1.4em;
 padding: 5px;
 margin-top: 5px;
 margin-top: 5px;
}

label{
font-size: 20px;
padding: 5px;
}
form #SubmitBtn{
  background-color: rgb(119, 206, 206);
  width: 30%;
  color: black;
  max-width: 200px;
  text-align: center;
  margin-left: 10%;
  margin-top: 9px;
  padding: 0px;
  border-radius: 8px;
  height:2.4rem;
}
    @media(max-width:400px){
    nav {
      display: flex;
      min-width: 97vw;
    }
    nav .logo {
      font-size: 20px;
      font-weight: bold;
      margin: 0;
    }
    nav ul{
      display: block;
      margin-left: 0;
      padding-right: 10px;
    }
    .stats{
      max-width: 80%;
      gap: 0;
    }
    section{
      max-width: 97vw;
    }
    .container{
      width: 96vw;
      max-width: 97vw;
    }
    .actions{
      display: grid;
      grid-template-columns: 1fr;
    }
    .overview{
      gap: 0;
      padding: 0;
      width: 97vw;
      max-width: 97vw;
      display: block;
    }
   }
    @media(min-width:400px)and (max-width:550px){
    nav .logo {
      font-size: 20px;
      font-weight: bold;
      margin: 0;
    }
    nav ul{
      justify-content: space-evenly;
      display: flex;
    }
    .card{
      padding: 0;
    }
    .stats{
      max-width: 80%;
      gap: 2vw;
    }
    .actions{
      display: grid;
      grid-template-columns: 1fr 1fr;
    }
    }
    @media(min-width:551px)and (max-width:650px){
    .actions{
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
    }
    nav ul{
      display: block;
    }
    }
    @media(min-width:701px){
    .actions{
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
    }
    }
  </style>
</head>
<body>

<nav>
  <div class="logo">MANTEADS</div><ul>
    <li><a href="post-job.php">Post Job</a></li>
    <li><a href="JobApplications.php">My Jobs</a></li>
    <!--<li><a href="#">Logout</a></li>-->
  </ul>
</nav>
<div class="container">
  <section class="overview">
    <h2>Welcome, <?php include "php/welcome.php";?></strong></h2>
    <div class="stats">
      <div class="card">Jobs Posted: <strong>5</strong></div>
      <div class="card">Applications: <strong>12</strong></div>
      <div class="card">Interviews Scheduled: <strong>2</strong></div>
    </div>
  </section>

  <a href="post-job.php" class="btn">+ Post New Job</a>

  <section class="job-listings">
    <h3>Your Posted Jobs</h3>
    <table>
      <tr>
        <th>Job Title</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
      <tr>
        <td>Frontend Developer</td>
        <td>Open</td>
        <td class="actions">
          <a href="#">View</a>
          <a href="#">Edit</a>
          <a href="#">Close</a>
          <a  id="Delete">Delete</a>
        </td>
      </tr>
      <tr>
        <td>Backend Developer</td>
        <td>Closed</td>
        <td class="actions">
          <a href="#">View</a>
          <a href="#">Edit</a>
          <a href="#">Open</a>
          <a href="#" id="Delete">Delete</a>
        </td>
      </tr>
    </table>
  </section>

  <section class="notifications">
    <h3>Notifications</h3>
    <ul>
      <li>You have 3 new applicants for Frontend Developer.</li>
      <li>Interview scheduled with John Doe tomorrow at 10:00 AM.</li>
    </ul>
  </section>
 <?php include "php/EmployerInfo.php";?>
  <!-- <section class="profile">
    <h3>Employer Profile</h3>
    <p><strong>Company/Name:</strong> TechStars Ltd.</p>
    <p><strong>Email:</strong> employer@example.com</p>
    <p><strong>Phone:</strong> +254 712 345678</p>
    <p><strong>Website URL:</strong>https://example.com</p>
    <p><strong>Location:</strong> Kenya</p>
    <p><strong>Description:</strong></p>
  </section> -->

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
