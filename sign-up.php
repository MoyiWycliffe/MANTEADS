<?php

include "php/Database.php";

$Fname =$Role= $Lname = $Email = $Age = $Country = $Gender = $PhoneNumber = $password = $confirmPassword = "";
$FnameError =$RoleError= $LnameError = $EmailError = $AgeError = $CountryError = $GenderError = $PhoneNumberError = $passwordError = $confirmPasswordError = "";
//CHECKING THE SUBMISSION METHOD
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Fname = htmlspecialchars(trim(string: $_POST["Firstname"]));
  $Lname = htmlspecialchars(trim(string: $_POST["LastName"]));
  $Email = htmlspecialchars(trim(string: $_POST["email"]));
  $Age = htmlspecialchars(trim(string: $_POST["Age"]));
  $Country = htmlspecialchars(trim(string: $_POST["Country"]));
  $Gender = htmlspecialchars(trim(string: $_POST["Gender"]));
  $PhoneNumber = htmlspecialchars(trim(string: $_POST["PhoneNumber"]));
  $password = htmlspecialchars(trim(string: $_POST["Password"]));
  $confirmPassword = htmlspecialchars(trim(string: $_POST["confirmPassword"]));
  $Role = htmlspecialchars(trim(string: $_POST["Role"]));
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  //VALIDATING USER INPUTS
  // 1. VALIDATING FIRSTNAME
  if (empty($Fname)) {
    $FnameError = "First Name field can`t be empty!!";
  } else {
    if (!preg_match("/^[A-Za-z]+$/", $Fname)) {
      $FnameError = "First Name must only contain letters!!";
    }
  }

  //2.VALIDATING LAST NAME
  if (empty($Lname)) {
    $LnameError = "First Name field can`t be empty!!";
  } else {
    if (!preg_match("/^[A-Za-z]+$/", $Lname)) {
      $LnameError = "Last Name must only contain letters!!";
    }
  }

  //3. VALIDATING EMAIL
  if (empty($Email)) {
    $EmailError = "Email cannot be empty!!";
  } else {
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $EmailError = "Invalid Email Format!!";
    }
  }

  //4. VALIDATING AGE
  if (empty($Age)) {
    $AgeError = "Age cannot be empty!!";
  } else {
    if (!filter_var($Age, FILTER_VALIDATE_INT)) {
      $AgeError = "Invalid Age Format!!";
    } elseif ($Age < 18 || $Age > 120) {
      $AgeError = "Age must be between 18 years to 119 years!!";
    }
  }  

  //5. VALIDATING COUNTRY
  if (empty($Country)) {
    $CountryError = "Country field can`t be empty!!";
  } else {
    if (!preg_match("/^[A-Za-z]+$/", $Country)) {
      $CountryError = "Country must only contain letters!!";
    }
  }

  //6.VALIDATING GENDER
  if (empty($Gender)) {
    $GenderError = "Gender field cannot be empty!!";
  } else {
    if (!in_array(strtolower($Gender), ['male', 'female'])) {
      $GenderError = "Gender must be Male or Female";
    }
  }

  //7.VALIDATING PHONE NUMBER
  if (empty($PhoneNumber)) {
    $PhoneNumberError = "Phone Number field cannot be empty!!";
  } elseif (!preg_match("/^\d{9,15}$/", $PhoneNumber)) {
    $PhoneNumberError = "Phone number MUST only contain number And between 10 to 15 digits!!";
  }

  //8.VALIDATING PASSWORD
//8.1 VALIDATING PASSWORD FIELD
  if (empty($password)) {
    $passwordError = "Password field cannot be empty!!";
  }
  //8.2 VALIDATING THE PASSWORD REQUIREMENTS
//8.2.1 VALIDATING PASSWORD LENGTH
  else {
    if (strlen($password) < 8) {
      $passwordError = "Password must be atleast 8 characters long!!";
    }
    //8.2.2 CHECK IF PASSWORD HAS AN UPPERCASE LETTER
    elseif (!preg_match("/[A-Z]/", $password)) {
      $passwordError = "Password MUST contain atleast 1 uppercase Letter!!";
    }
    //8.2.3 CHECK IF PASSWORD HAS A LOWERCASE
    elseif (!preg_match("/[a-z]/", $password)) {
      $passwordError = "Password must contain atleat one lowercase letter!!";
    }
    //8.2.4 CHECK IF PASWORD HAS A NUMBER
    elseif (!preg_match("/[0-9]/", $password)) {
      $passwordError = "Password must contain atleast one number!!";
    }
    //8.2.5 CHECK IF PASSWORD HAS A SPECIAL CHARACTER
    elseif (!preg_match("/[\W_]/", $password)) {
      $passwordError = "Password must contain atleast one special character!!";
    }
  }
  //9. CONFIRM PASSWORD MATCH
  if ($password !== $confirmPassword) {
    $confirmPasswordError = "Password Do not match!!";
  }
  $allowed_Roles = ['Normal User', 'Employer', 'Job Seeker'];
  if(empty($Role) ||!in_array($Role,$allowed_Roles)){
    $RoleError = "Role can not be Null!!";
  }

  //IF NO ERRORS THEN REDIRECT TO LOGIN.PHP
  if (
    empty($FnameError) &&
    empty($LnameError) &&
    empty($AgeError) &&
    empty($EmailError) &&
    empty($GenderError) &&
    empty($CountryError) &&
    empty($passwordError) &&
    empty($confirmPasswordError)&&
    empty($RoleError)
  ) {
    //check if user exists
    $checkUserExists = "SELECT * FROM Users WHERE Email=?";
    $stmt = $conn->prepare($checkUserExists);
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
      $EmailError = "Account with this Email Already exists,Login Instead!!";
    } else {
      $sql = "INSERT INTO Users (FirstName,LastName,Email,UserAge,Country,Gender,PhoneNumber,hashed_password,ROLE)
    VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("sssisssss",$Fname,$Lname,$Email,$Age,$Country,$Gender,$PhoneNumber,$hashed_password,$Role);
    $stmt->execute();

      //redirect Users
      header("location:login.php");
    }
    $stmt->close();
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
    <title>MANTEADS-Sign Up</title>
    <link rel="stylesheet" href="sign-up.css">
  </head>
 <body>
 <header>
   <?php include('navbar.html');?>
   <style>
    form span{
      color:red;
    }
   </style>

 </header>
 <h1>Welcome to your Sign up page.</h1>
 <form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <label class="Full-Name">First Name:</label><br>
  <input type="text" name="Firstname" value="<?php echo $Fname;?>"><br>
  <span><?php echo $FnameError;?></span><br>
  <label class="Full-Name">Last Name:</label><br>
  <input type="text"value="<?php echo $Lname;?>" name="LastName"><br>
  <span><?php echo $LnameError;?></span><br>
  <label class="Enter-Email">Enter Email:</label><br>
  <input type="email" value="<?php echo $Email;?>" name="email" id="email"><br>
  <span><?php echo $EmailError;?></span><br>
  <label class="Enter-Age">Enter Age:</label><br>
  <input type="number" value="<?php echo $Age;?>" name="Age"><br>
  <span><?php echo $AgeError;?></span><br>
  <label class="Enter-Country">Enter Country:</label><br>
  <input type="text" name="Country" value="<?php echo $Country;?>"><br>
  <span><?php echo $CountryError;?></span><br>
  <label class="Enter-Gender">Enter Gender:</label><br>
  <input type="text" name="Gender" value="<?php echo $Gender;?>"><br>
  <span><?php echo $GenderError;?></span><br>
  <label class="Enter-PhoneNumber">Enter PhoneNumber:</label><br>
  <input type="text" name="PhoneNumber" value="<?php echo $PhoneNumber;?>"><br>
  <span><?php echo $PhoneNumberError;?></span><br>
   <label class="Enter-Password">Enter Password:</label><br>
  <input type="password" name="Password"><br>
  <span><?php echo $passwordError;?></span><br>
  <label class="Confirm-Password">Confirm Password:</label><br>
  <input type="password" name="confirmPassword"><br>
  <span><?php echo $confirmPasswordError;?></span><br>
  <label>Role:</label>
  <select value="" name="Role">
    <option>None</option>
    <option value="Normal_User">Normal User</option>
    <option value="Employer">Employer</option>
    <option values="Job_Seeker">Job Seeker</option>
  </select><br>
  <span><?php echo $RoleError;?></span><br>
  <input id="SubmitBtn" name="Submit" type="submit" value="Submit"><br>
  <p id="p">Already have an acount?<button><a href="login.php">Login</a></button>.</p>
  </div>
  </form>
  <?php include('footer.html');?>
 </body>
 </html>