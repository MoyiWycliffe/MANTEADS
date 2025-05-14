<?php
session_start();
include "php/Database.php";
$Email = "";
$EmailError = $passwordError = "";
// Streamlined authentication with exception-safe validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = htmlspecialchars(trim($_POST["email"]));
    $password = htmlspecialchars(trim($_POST["password"]));

    if (empty($Email) || !filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $EmailError = "Email cannot be empty and must be valid.";
    }
    if (empty($password)) {
        $passwordError = "Password cannot be empty.";
    }

    if(empty($Email)&& empty($password)){
      $EmailError = "Email cannot be empty";
      $passwordError = "Password cannot be empty.";
      header("Location:login.php");
      exit();
    }

    if (empty($EmailError) && empty($passwordError)) {
        $sql = "SELECT UserID, FirstName,LastName, Email, Hashed_password,ROLE FROM Users WHERE Email=?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $Email);
        $stmt->execute();
        $results = $stmt->get_result();

        if ($results->num_rows === 1) {
            $user = $results->fetch_assoc();
            if (password_verify($password, $user['Hashed_password'])) {
                $_SESSION['UserID'] = $user['UserID'];
                $_SESSION['FirstName'] = $user['FirstName'];
                $_SESSION['LastName'] = $user['LastName'];
                $_SESSION['Email'] = $user['Email'];
                $_SESSION['ROLE'] = $user['ROLE'];
                //redirecting
                // $redirect = isset($_SESSION['redirect_after_login'])? $_SESSION   ['redirect_after_login'] :
                // 'earningDashboard.php';
                // unset($_SESSION['redirect_after_login']);
                if($user['ROLE']==='Employer'){
                header("Location:employer.php");
                 exit();
                }
                else{
                  if($user['ROLE']==='Normal_User'){
                  header("Location:earningDashboard.php");
                  exit();
                  }
                  else{
                  header("Location:jobSeeker.php");
                  exit();
                  }
                }
               
            } 
            else {
                $passwordError = "Incorrect password.";
            }
        } 
        else {
            $EmailError = "Email doesn’t exist.";
        }
    }
      $stmt->close();
       $conn->close();
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
    <title>Login</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="login.css">
    <style>
      span{
        color:red;
      }
    </style>
  </head>
 <body>
  <?php include('navbar.html');?>
   <h1>Welcome to your login page.</h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
   <div class="login-error-msg">
    <p class="error-msg"></p>
   </div>
   <p class="note">Enter your <b>CORRECT </b><strong>EMAIL</strong> and <strong>PASSWORD</strong> for you to login.</p>
   <label class="Enter-Email">Enter Email:</label><br>
   <input name="email" type="email" placeholder="Mante254@gmail.com" value="<?php echo htmlspecialchars($Email);?>"><br>
   <span><?php echo $EmailError;?></span><br>
   <label class="Enter-Password">Password:</label><br>
   <input name="password" type="password" id="password">
   <button type="button" onclick="togglePassword()" class="show-hide-btn">Show</button><br>
   <script>
    function togglePassword(){
      const passwordField=document.getElementById("password");
      const toggleBtn=document.querySelector(".show-hide-btn");
      if(passwordField.type==="password"){
        passwordField.type="text";
        toggleBtn.textContent="Hide";
      }
      else{
        passwordField.type="password";
        toggleBtn.textContent="Show";
      }
    }
   </script>
   <span><?php echo $passwordError;?></span><br>
   <input id="SubmitBtn" type="submit" value="Submit" name="submit">
    <p class="p">You don`t have an account?<button><a href="sign-up.php">Sign Up </a></button>.</p>
  <p class="p">Forgot Password?Recover it <button><a href="recover-password.php">Here</a></button>.</p>
  </form>
  <?php include('footer.html');?>
 </body>
 </html>