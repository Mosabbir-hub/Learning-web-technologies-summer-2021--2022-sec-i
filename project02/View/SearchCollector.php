<?php 
session_start();
if(empty($_SESSION["Username"])) 
{
header("Location: ../View/login.php"); // Redirecting To Login Page
}
?>

<!DOCTYPE html>
<html>
<head>

<script src="../Controller/SearchCollector.js"> </script> 

<link rel="stylesheet" type="text/css" href="CSS/navbar.css">

</head> 

<link rel="stylesheet" type="text/css" href="../Asset/navbar.css"><link rel="stylesheet" type="text/css" href="../Asset/navbar.css">

<ul>
        <li><a  class="active" href="Login.php">Home</a></li>
        <li><a   href="Profile.php">Profile</a></li>
        <li><a   href="../Controller/Logout.php">Logout</a></li>
        <li><a href="#">About</a></li>
    </ul>

<br>
    <fieldset>
        <legend> Search Product </legend>
<div> 
Collector Name: <input type=text name="name" placeholder="Enter Collector Name" id="name" onkeyup ="show()" ><br>
<p id="mytext"></p> 

</fieldset>
</div> 



</body>
</html>

