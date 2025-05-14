<?php
include "php/auth_login_checker.php";
?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Find and apply for thousands of verified job listings across various sectors on MANTEADS. Plus, earn extra income through surveys, offerwalls, and microtasks.">
  <meta name="author" content="MANTEADS">
  <meta name="keywords" content="jobs, online jobs, job search Kenya, careers, MANTEADS, apply online, surveys, offerwalls, microtasks, remote jobs, freelance opportunities">
  <title>MANTEADS - JobSeeker</title>
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="employer.css">
  <link rel="stylesheet" href="jobSeeker.css">
 </head>

 <body>
   <?php
   echo '<header>';
   echo '<nav id="sidebar" class="sidebar">';
   echo '<div class="sidebar-header">';
   echo '<button class="close-btn" onclick="toggleSidebar()">×</button>';
   echo '</div>';
   echo '<div class="navbar" id="navbar">';
   echo '<ul class="sidebar-nav">';
   //MAKING SESSIONS
   if(isset($_SESSION['UserID'])){
   echo '<li><a href="index.php">Home</a></li>';
   echo '<li><a href="logout.php">Logout</a></li>';
   echo '<li><a href="jobseekerprofile.php">Profile</a></li>';
   echo '<li><a href="jobseekerdashboard.php">Dashboard</a></li>';
   echo '<li><a href="jobseekermyapplications.php">Applications</a></li>';
   echo '<li><a href="Settings.php">Settings</a></li>';
   echo '<li><a href="FAQs.php">FAQs</a></li>';
   echo '<li><a href="Earn.php">Earn</a></li>';
}
else{
   echo '<li><a href="index.php">Home</a></li>';
   echo '<li><a href="FAQs.php">FAQs</a></li>';
   echo '<li><a href="Earn.php">Earn</a></li>';
   echo '<li><a href="login.php">Login</a></li>';
}
   echo '</ul>';
   echo '</div>';
   echo '</nav>';
   echo '</header>';
   ?>

<button class="open-sidebar-btn" onclick="toggleSidebar()">☰</button>
<script>

  function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("open");
  }
</script>
  <main>
   <section class="intro" id="intro">
    <h1>Welcome to MANTEADS JobSeeker Portal</h1>
    <p>
     At MANTEADS, we are revolutionizing the job search experience by connecting job seekers with verified employers in real time. Whether you're looking for full-time, part-time, freelance, or remote positions, our platform hosts thousands of listings from trusted companies across multiple industries. With intelligent filters, seamless applications, and timely notifications, your career journey just got smarter.
    </p>
    <p>
     But that’s not all. We go beyond jobs. MANTEADS introduces new avenues to earn online through microtasks, paid surveys, and sponsor-driven offerwalls — all integrated into your account. Whether you're a student looking for side income, a professional between roles, or simply curious about passive earning, MANTEADS is built to support and scale your goals.
    </p>
   </section>

   <section class="features">
    <h2>Why Choose MANTEADS?</h2>
    <ul>
     <li>Thousands of curated job listings across all categories and locations</li>
     <li>Free and premium user tools to manage applications and profile visibility</li>
     <li>Verified employers and transparent hiring processes</li>
     <li>Earn money through simple tasks — surveys, offerwalls, and microtasks</li>
     <li>Real-time dashboard for tracking jobs and earnings</li>
     <li>100% mobile responsive design for job seekers on the go</li>
    </ul>
   </section>
  </main>

  <?php include('footer.html'); ?>
 </body>
</html>