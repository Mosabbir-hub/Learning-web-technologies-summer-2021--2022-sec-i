<?php 
session_start();
echo "<b><center>Manager's Profile</center></b>";
$Name=$UName=$Phone="";
    $file = fopen('users.txt', 'r');
    while (!feof($file)) {
            $line = fgets($file);
            $user = explode('|', $line);
            $UserName=trim($user[0]);

            if($_SESSION["Username"] == $UserName)
            {
               $Name=$user[1];
               $Phone=$user[2];
            }
    }

    echo "<center>";
    echo "<table >";

    echo "<tr>";
    echo "<td><b>Name : </b>".$Name."</td><br>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Username : </b>".$_SESSION["Username"]."</td><br>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Phone : </b>".$Phone."</td>";
    echo "</tr>";
    

echo "<td><a href='EditProfile.php'>Edit Profile</a></td>";

    // echo "<tr>";
    // echo "<td></td>";
    // echo "<td>".$Name."</td>";
    // echo "<td>".$_SESSION["Username"]."</td>";
    // echo "<td>".$Phone."</td>";
    // 
    // echo "</tr>";

    echo "</table>";
    echo "</center>";


?>