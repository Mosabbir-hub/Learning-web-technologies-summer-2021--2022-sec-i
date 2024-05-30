<?php 
session_start();
require("../Model/DatabaseConnection.php");
echo "<center>";
?>
<link rel="stylesheet" type="text/css" href="../Asset/navbar.css">
<link rel="stylesheet" type="text/css" href="../Asset/table.css">
<ul>
        <li><a  href="Login.php">Home</a></li>
        <li><a   href="Profile.php">Profile</a></li>
        <li><a   href="../Controller/Logout.php">Logout</a></li>
        <li><a href="#">About</a></li>
    </ul>
<?php
echo "<h2>All Working Schedule List</h2>";
echo "<table class='fl-table'>";
echo "<thead>";
echo "<tr>";
echo "<th>Assign Id</th>";
echo "<th>Collector Id</th>";
echo "<th>Name</th>";
echo "<th>Location</th>";
echo "<th>Date</th>";
echo "</tr>";
echo "</thead>";

$connection=new DatabaseConnection();
$con=$connection->Connect();

$reporters=$connection->AssignWorks($con);

if ($reporters->num_rows > 0) 
{

    while($row = $reporters->fetch_assoc()) 
    {
    
      echo "<tr>";
      echo "<td>".$row["Id"]."</td>";
      echo "<td>".$row["C_Id"]."</td>";
      echo "<td style='color:#630f80;'>".$row["C_Name"]."</td>";
      echo "<td>".$row["Location"]."<br></td>";
      echo "<td>".$row["Date"]."<br></td>";
     echo "</tr>";
      echo "</div>";

    }
}

echo "</table";
echo "</center>";



?>