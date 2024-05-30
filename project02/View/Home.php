<?php 
session_start();
if(!isset($_SESSION["Username"])){
    header("location: Login.php ");
}




?>
<link rel="stylesheet" type="text/css" href="../Asset/navbar.css"><link rel="stylesheet" type="text/css" href="../Asset/navbar.css">

<ul>
        <li><a  class="active" href="Login.php">Home</a></li>
        <li><a   href="Profile.php">Profile</a></li>
        <li><a   href="../Controller/Logout.php">Logout</a></li>
        <li><a href="#">About</a></li>
    </ul>
    <link rel="stylesheet" type="text/css" href="../Asset/navbar.css"><link rel="stylesheet" type="text/css" href="../Asset/home.css">
  <?php  echo "<center> <h2>Welcome  to Crowdfunding Mr.<b>" .$_SESSION["Username"] ."</b></h2></center><br>"?>

    <center>
<span>
     <a href="Profile.php"> View Profile  </a><br><br>
     <a href="AddReporter.php"> Add Reporter  </a><br><br>
     <a href="Repoter.php"> Repoters List  </a><br><br>
     <a href="SearchReporter.php"> Search Repoters   </a><br><br>
     <a href="AddCollector.php"> Add Collector  </a><br><br>
     <a href="Collectors.php"> Collectors List  </a><br><br>
     <a href="SearchCollector.php"> Search Collectors  </a><br><br>
     <a href="AssignList.php"> Work Assign List  </a><br><br>
    <a href="../Controller/logout.php"> Log Out</a>
</span>
</center>