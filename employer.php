<?php
include "php/auth_login_checker.php";
?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Post jobs, manage applications, and hire the best talent through the MANTEADS platform — your complete recruitment solution.">
  <meta name="author" content="MANTEADS">
  <meta name="keywords" content="employer dashboard, post jobs, manage applicants, recruit talent, online hiring, HR tools, MANTEADS recruitment">
  <link rel="icon" type="image/png" href="favicon.png">
  <title>MANTEADS – Employer Portal</title>
  <link rel="stylesheet" href="employer.css">
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
   echo '<li><a href="Logout.php">Logout</a></li>';
   echo '<li><a href="Post-job.php">Post a Job</a></li>';
   echo '<li><a href="employer-dashboard.php">Dashboard</a></li>';
   echo '<li><a href="managejobs.php">Manage Jobs</a></li>';
   echo '<li><a href="Applications.php">Applications</a></li>';
   echo '<li><a href="Settings.html">Settings</a></li>';
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
    <div id="intro">
    <h1>Welcome to MANTEADS Employer Hub</h1>
    <p>
     MANTEADS is your trusted digital recruitment platform designed to streamline your hiring process from job posting to candidate selection. Whether you're a startup looking for your first hire or a large enterprise scaling fast, our platform empowers employers with intelligent hiring tools, real-time applicant tracking, and customizable job listings. Leverage our intuitive dashboard to monitor applications, shortlist candidates, and schedule interviews seamlessly.
    </p>
    </div>
    <p>
     With access to thousands of verified job seekers across multiple skill sets and industries, MANTEADS ensures that your listings reach the right talent. Our advanced filtering and job targeting tools boost visibility among relevant candidates, improving hiring efficiency and reducing recruitment costs. Our system is built for speed, accuracy, and scalability—so you can focus on building your team while we handle the technical details.
    </p>
   </section>

   <section class="features">
    <h2>Key Employer Features</h2>
    <ul>
     <li>Post unlimited job vacancies quickly and easily</li>
     <li>Access a wide pool of job seekers across Kenya and beyond</li>
     <li>Track applications in real time with our dynamic dashboard</li>
     <li>Customize your employer profile for better branding and visibility</li>
     <li>Communicate directly with shortlisted applicants</li>
     <li>Offer tasks, gigs, or microjobs and manage payouts via our Earn module</li>
     <li>Promote listings via sponsored placements for higher reach</li>
    </ul>
   </section>
  </main>

  <?php include('footer.html'); ?>
 </body>
</html>