<?php 
session_start();
if(!isset($_SESSION["Username"])){
    header("location: Login.php ");
}


echo "<center>Welcome <b>" .$_SESSION["Username"] ."</b> to This WebSite</center><br>"

?>

<center>
<span>
     <a href="Profile.php"> View Profile | </a>
     <a href="Repoter.php"> Repoters List | </a>
     <a href="Collectors.php"> Collectors List | </a>
    <a href="logout.php"> Log Out</a>
</span>
</center>