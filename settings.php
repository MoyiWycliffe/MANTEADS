<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Browse thousands of jobs and apply online easily on MANTEADS platform.">
  <meta name="author" content="MANTEADS">
  <meta name="keywords" content="jobs, career, apply online, job search,Fill Surveys,Complete microtasks and offerwalls.">
   <link rel="icon" type="image/png" href="favicon.png">
  <title>Account Settings</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .settings-container {
      max-width: 97vw;
      margin: 30px auto;
      background: #fff;
      padding: 25px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    .settings-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .settings-header h2 {
      margin: 0;
      color: #333;
    }

    .settings-header p {
      color: #777;
    }
    .settings-form{
      max-width: 80vw;
      margin-left: 5vw;
      align-items: center;
      margin-bottom: 100px;
    }

    .settings-form input, .settings-form select, .settings-form textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ddd;
    }

    .settings-form button {
      padding: 10px 15px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .settings-form button:hover {
      background-color: #0056b3;
    }

    .back-btn {
      display:block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #6c757d;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      max-width: 140px;
    }

    .back-btn:hover {
      background-color: #5a6268;
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
  </style>
</head>
<body>
  <div class="settings-container">
    <div class="settings-header">
      <h2>Account Settings</h2>
      <p>Update your personal details and preferences below.</p>
    </div>

    <!-- Settings Form -->
    <form class="settings-form">
      <!-- Common User Info -->
      <h3>Personal Information</h3>
      <label for="username">Username</label>
      <input type="text" id="username" name="username" value="JaneDoe" required>

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" value="janedoe@example.com" required>

      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phone" value="123-456-7890" required>

      <label for="address">Address</label>
      <textarea id="address" name="address" rows="3">123 Street, Nairobi, Kenya</textarea>

      <!-- Employer Specific Settings -->
      <div id="employer-settings">
        <h3>Employer Settings</h3>
        <label for="company-name">Company Name</label>
        <input type="text" id="company-name" name="company-name" value="XYZ Tech" required>

        <label for="company-website">Company Website</label>
        <input type="url" id="company-website" name="company-website" value="https://xyztech.com" required>

        <label for="company-description">Company Description</label>
        <textarea id="company-description" name="company-description" rows="4">Leading tech company providing innovative solutions.</textarea>
      </div>

      <!-- Job Seeker Specific Settings -->
      <div id="jobseeker-settings">
        <h3>Job Seeker Settings</h3>
        <label for="resume">Upload Resume</label>
        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx">

        <label for="skills">Skills</label>
        <textarea id="skills" name="skills" rows="4">Frontend Development, JavaScript, HTML, CSS</textarea>

        <label for="desired-job">Desired Job Title</label>
        <input type="text" id="desired-job" name="desired-job" value="Frontend Developer" required>
      </div>

      <button type="submit">Save Changes</button>
    <a href="jobseekerdashboard.php" class="back-btn">Back to Dashboard</a>
    </form>
  </div>

  <script>
    // Toggle employer-specific settings visibility based on the user's role
    let userRole = 'jobseeker'; // Change this dynamically based on the logged-in user's role
    
    if (userRole === 'employer') {
      document.getElementById('employer-settings').style.display = 'block';
      document.getElementById('jobseeker-settings').style.display = 'none';
    } else {
      document.getElementById('jobseeker-settings').style.display = 'block';
      document.getElementById('employer-settings').style.display = 'none';
    }
  </script>
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
