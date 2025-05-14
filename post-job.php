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

$Title =$JobDescription=
        $JobCategory=
        $JobLocation =
        $ApplicationDeadline=
        $JobType= 
        $SalaryRange =
        $Experience_Level=
        $Required_Skills= 
         $Application_Link_Or_URL="";

$TitleError = $JobDescriptionError=
              $JobCategoryError=
              $JobLocationError =
              $ApplicationDeadlineError=
              $JobTypeError= 
              $SalaryRangeError =
              $Experience_LevelError=
              $Required_SkillsError=  
              $Application_Link_Or_URLError="";


$Email=$_SESSION['Email'];
$Role=$_SESSION['ROLE'];

$stmt = $conn->prepare("SELECT Employers.Email,
                               Employers.EmployerID 
                               FROM Employers
                               INNER JOIN users
                               ON users.Email=employers.Email
                               WHERE users.Email=? AND users.Role=?");
$stmt->bind_param("ss", $Email,$Role);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$EmployerID = $row['EmployerID'];

if ($EmployerID==null){
        $EmployerID = "Unregistered Employer!!";
}
$Employer_Name=$_SESSION['LastName']." ".$_SESSION['FirstName'];


//GETTING DATA FROM THE INPUTS
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Title = htmlspecialchars($_POST['title']);
        $JobDescription = htmlspecialchars($_POST['description']);
        $JobCategory = htmlspecialchars($_POST['category']);
        $JobLocation = htmlspecialchars($_POST['location']);
        $ApplicationDeadline = htmlspecialchars($_POST['deadline']);
        $JobType = htmlspecialchars($_POST['type']);
        $SalaryRange = htmlspecialchars($_POST['salary']);
        $Experience_Level = htmlspecialchars($_POST['experience']);
        $Required_Skills = htmlspecialchars($_POST['skills']);
        $Application_Link_Or_URL = htmlspecialchars($_POST['Application-link/email']);
        $Created_at = date('Y-m-d H:i:s');
        $EmployerID = $row['EmployerID'];
        $Employer_Name = $_SESSION['LastName'] . " " . $_SESSION['FirstName'];

// VALIDATING INPUTS
//1.CHECKING FOR EMPTY FIELDS

       if(empty($Title)){
        $TitleError = "Title Field Cannot be empty!!";
        }
        if(empty($JobDescription)){
        $JobDescriptionError="Description Field Cannot be empty!!";
        }
       if(empty($JobCategory)){
        $JobCategoryError="Category Field Cannot be empty!!";
        }
       if(empty($JobLocation)){
        $JobLocationError ="Location Field Cannot be empty!!";
        }
       if(empty($ApplicationDeadline)){
        $ApplicationDeadlineError="Deadline Field Cannot be empty!!";
        }
       if(empty($JobType)){
        $JobTypeError= "Type Field Cannot be empty!!";
        }
       if(empty($SalaryRange)){
        $SalaryRangeError ="Salary Field Cannot be empty!!";
        }
       if(empty($Experience_Level)){
        $Experience_LevelError="Experience Field Cannot be empty!!";
        }
       if(empty($Required_Skills)){
        $Required_SkillsError=  "Skills Field Cannot be empty!!";
        }
       if(empty($Application_Link_Or_URL)){
        $Application_Link_Or_URLError="Application-link/email Field Cannot be empty!!";
        }
   else{
    if(empty($TitleError) && empty($JobDescriptionError)&& 
          empty($JobCategoryError)&&
          empty($JobLocationError)&&
          empty($ApplicationDeadlineError)&&
          empty($JobTypeError)&&
          empty($SalaryRangeError)&&
          empty($Experience_LevelError)&&
          empty($Required_SkillsError)&&
          empty($Application_Link_Or_URLError)){
        $sql = "INSERT INTO jobs (EmployerID,
                    Title,
                    JobDescription,
                    Created_at,
                    JobCategory,
                    JobLocation,
                    ApplicationDeadline,
                    JobType,
                    SalaryRange,
                    Experience_Level,
                    Required_Skills,
                    Application_Link_Or_URL,
                    Employer_Name
                    ) 
        VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->bind_param(
                "issssssssssss",
                $EmployerID,
                $Title,
                $JobDescription,
                $Created_at,
                $JobCategory,
                $JobLocation,
                $ApplicationDeadline,
                $JobType,
                $SalaryRange,
                $Experience_Level,
                $Required_Skills,
                $Application_Link_Or_URL,
                $Employer_Name
        );
        if ($statement->execute()) {
                echo "Job Posted Successfully!!";
        } else {
                echo "Job Posting Failed:" . $statement->error;
        }
    }
   }
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
  <title>Post a Job</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    nav {
      background: #222;
      color: white;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav .logo {
      font-weight: bold;
      font-size: 20px;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin-left: 15px;
    }

    .container {
      max-width: 700px;
      margin: 30px auto;
      background: #fff;
      padding: 30px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }

    h2 {
      margin-top: 0;
    }

    label {
      display: block;
      margin: 15px 0 5px;
    }

    input[type="text"],
    input[type="date"],
    input[type="file"],
    select,
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    textarea {
      height: 120px;
    }

    .btn {
      background: green;
      color: white;
      padding: 10px 20px;
      border: none;
      margin-top: 20px;
      cursor: pointer;
      border-radius: 4px;
    }

    .btn:hover {
      background: darkgreen;
    }
    span{
      color:red;
    }
  </style>
</head>
<body>

<nav>
  <div class="logo"><?php echo strtoupper($_SESSION['LastName']." ".$_SESSION['FirstName']);?></div>
  <div>
    <a href="employer-dashboard.php">Dashboard</a>
    <a href="Logout.php">Logout</a>
  </div>
</nav>

<div class="container">
  <h2>Post a New Job</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
    <label for="title">Job Title *</label>
    <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($Title);?>">
    <span><?php echo htmlspecialchars($TitleError);?></span><br>

    <label for="description">Job Description *</label>
    <textarea id="description" name="description" value="<?php echo htmlspecialchars($JobDescription);?>"></textarea>
    <span><?php echo htmlspecialchars($JobDescriptionError);?></span><br>

    <label for="category">Category *</label>
    <select id="category" name="category" value="<?php echo htmlspecialchars($JobCategory);?>">
      <option value="">-- Select Category --</option>
            <option value="Technology">Technology</option>
            <option value="Healthcare">Healthcare</option>
            <option value="Business">Business</option>
            <option value="Creative-Jobs">Creative Jobs</option>
            <option value="Education-Jobs">Education Jobs</option>
            <option value="Engineering">Engineering</option>
            <option value="Art-And-Entertainment">Art And Entertainment</option>
            <option value="GovernmentJobs">Government Jobs</option>
            <option value="Skilled-Trades-Jobs">Skilled Trades Jobs</option>
            <option value="HospitalityJobs">Hospitality Jobs</option>
            <option value="ScienceAndResearch">Science And Research</option>
            <option value="Finance">Finace</option>
            <option value="Retail">Retail</option>
            <option value="Transportation">Transportation</option>
            <option value="Telecommunications">Telecommunications</option>
            <option value="Others">Others</option>
    </select>
    <span><?php echo htmlspecialchars($JobCategoryError);?></span><br>

    <label for="location">Location *</label>
    <input type="text" id="location" name="location" value="<?php echo htmlspecialchars($JobLocation);?>" >
    <span><?php echo htmlspecialchars($JobLocationError);?></span><br>

    <label for="deadline">Application Deadline *</label>
    <input type="date" id="deadline" name="deadline" value="<?php echo htmlspecialchars($ApplicationDeadline);?>">
    <span><?php echo htmlspecialchars($ApplicationDeadlineError);?></span><br>

    <!-- Phase 1B -->
    <label for="type">Job Type</label>
    <select id="type" name="type" value="<?php echo htmlspecialchars($JobType);?>">
      <option>Full-time</option>
      <option>Part-time</option>
      <option>Remote</option>
      <option>Contract</option>
    </select>
    <span><?php echo htmlspecialchars($JobTypeError);?></span><br>

    <label for="salary">Salary Range</label>
    <input type="text" id="salary" name="salary"  placeholder="e.g., KES 50,000 - 80,000" value="<?php echo htmlspecialchars($SalaryRange);?>">
    <span><?php echo htmlspecialchars($SalaryRangeError);?></span><br>

    <label for="experience">Experience Level</label>
    <select id="experience" name="experience" value="<?php echo htmlspecialchars($Experience_Level);?>" >
      <option>Entry</option>
      <option>Mid</option>
      <option>Senior</option>
    </select>
    <span><?php echo htmlspecialchars($Experience_LevelError);?></span><br>

    <label for="skills">Required Skills (comma-separated)</label>
    <input type="text" id="skills" name="skills" placeholder="e.g., HTML, CSS, PHP" value="<?php echo htmlspecialchars($Required_Skills);?>" >
    <span><?php echo htmlspecialchars($Required_SkillsError);?></span><br>
    <label for="Link/Email">Application Link/Email</label>
    <input type="text"  name="Application-link/email" value="<?php echo htmlspecialchars($Application_Link_Or_URL);?>">
    <span><?php echo htmlspecialchars($Application_Link_Or_URLError);?></span><br>
    <!-- <label for="logo">Upload Company Logo</label>
    <input type="file" id="logo" name="logo">   -->
    <button class="btn" type="submit" name="post-job-Btn">Post Job</button>
  </form>
</div>

</body>
</html>

