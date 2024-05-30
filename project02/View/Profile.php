<?php 
include("../Model/DatabaseConnection.php");

session_start();

echo "<b><center>Manager's Profile</center></b>";
$Name=$UName=$Phone="";
?>
<link rel="stylesheet" type="text/css" href="../Asset/navbar.css">
<ul>
        <li><a  href="Login.php">Home</a></li>
        <li><a   class="active" href="Profile.php">Profile</a></li>
        <li><a   href="../Controller/Logout.php">Logout</a></li>
        <li><a href="#">About</a></li>
    </ul>
<?php
$db=new DatabaseConnection();
$conn=$db->Connect();
$result=$db->GetValue($conn,$_SESSION["Username"]);

if(mysqli_num_rows($result)>0)
{

    while($row = $result->fetch_assoc())
    {


        

    // $file = fopen('users.txt', 'r');
    // while (!feof($file)) {
    //         $line = fgets($file);
    //         $user = explode('|', $line);
    //         $UserName=trim($user[0]);

    //         if($_SESSION["Username"] == $UserName)
    //         {
    //            $Name=$user[1];
    //            $Phone=$user[2];
    //         }
    // }

    echo "<center>";
    echo "<table >";

    echo "<tr>";
    echo "<td><b>Name : </b>".$row["Name"]."</td><br>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Username : </b>".$row["Username"]."</td><br>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Phone : </b>".$row["Phone"]."</td>";
    echo "</tr>";
    

echo "<td><a href='EditProfile.php'>Edit Profile</a></td>";

    echo "</table>";
    echo "</center>";

}
}

?>