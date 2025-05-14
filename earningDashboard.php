<?php
include "php/auth_login_checker.php";
include "php/Database.php";
//RETRIEVING DATA FROM DB 
$userid = $_SESSION['UserID'];
$stmt = $conn->prepare("SELECT Type, Amount, description, created_at FROM transactions WHERE userid = ? ORDER BY created_at DESC");
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE HTML>
<head>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Browse thousands of jobs and apply online easily on MANTEADS platform.">
  <meta name="author" content="MANTEADS">
  <meta name="keywords" content="jobs, career, apply online, job search,Fill Surveys,Complete microtasks and offerwalls.">
   <link rel="icon" type="image/png" href="favicon.png">
   <title>Earning Dashboard</title>
   <link rel="stylesheet" href="earningDashboard.css">
   <style>
      h1 strong{
         color:blue;
         font-size: 1.2em;
         font-weight: 900;
      }
   </style>
</head>
<html>
<body>
<?php include('navbar.html'); ?>
<div class="container">
<h1>HI, <strong><?php include "php/welcome.php";?></strong>,WELCOME TO YOUR EARNINGS DASHBOARD.</h1>
<div class="wallet">
<h3>WALLET</h3>
<p>Your Total Balance:<span><?php ?></span></p>
<p>Your Earnings From Surveys:<span><?php ?></span></p>
<p>Your Earnings Microtasks:<span><?php ?></span></p>
<p>Your Earnings From Offerwalls:<span><?php ?></span></p>
<button><a href="withdraw.html">WITHDRAW</a></button>
</div>

<div class="Transactions">
  <h3>TRANSACTION HISTORY</h3>
  <table border="1">
    <tr>
      <th>Date</th>
      <th>Type</th>
      <th>Amount</th>
      <th>Description</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= htmlspecialchars($row['created_at']) ?></td>
        <td><?= htmlspecialchars($row['Type']) ?></td>
        <td>$<?= number_format($row['Amount'], 2) ?></td>
        <td><?= htmlspecialchars($row['description']) ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</div>
<div class="Affiliate">
<h3>AFFILIATE MARKETING</h3>
<p>Total Refferals:<span><?php ?></span></p>
<p>Pending Refferals:<span><?php ?></span></p>
<p>Successfull Refferals:<span><?php ?></span></p>
<p>Balance From Refferals:<span><?php ?></span></p>
<script>
    function copyReferralLink() {
      var copyText = document.getElementById("referralLink");
      copyText.select();
      copyText.setSelectionRange(0, 99999); // For mobile devices
      document.execCommand("copy");

      alert("Referral link copied: " + copyText.value);
    }
</script>
<!-- //<p>Your Referral Link</p>
//<input type="text" id="referralLink" value="<?= htmlspecialchars($referral_link) ?>" readonly style="width: 90%;">
<button onclick="copyReferralLink()">Copy Link</button> -->

</div>
<div class="available-tasks">
<h3>AVAILABLE TASKS</h3>

<?php include "php/Surveys.php";?>
<!-- <div class="surveys">
<h4>SURVEYS.</h4>
<h5>Title |-rewards</h5>
<p><span class="description">Description</span><br>
<span>THE Description Here</span><br></p>
<button>Start</button>
</div> -->
<?php include "php/Microtasks.php";?>
<!-- <div class="microtasks">
<h4>MICROTASKS.</h4>
<img src="Mylogo.jpg" alt="offer">
<h5>Title |-rewards</h5>
<p><span class="description">Description</span><br>
<span>THE Description Here</span><br></p>
<button>Complete Offer</button>
</div> -->
<?php include "php/Offerwalls.php";?>
<!-- <div class="Offerwalls">
<h4>OFFERWALLS.</h4>
<h5>Title |-Rewards</h5>
<p><span class="description">Description</span><br>
<span>THE Description Here</span><br></p>
<button>Start Task</button>
</div> -->
</div>
</div>
<?php include('footer.html'); ?>
</body>
</html>