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
echo "<h2>All Collectors List</h2>";
echo "<table  class='fl-table'>";
echo "<thead>";
echo "<tr>";
echo "<th>SL</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Location</th>";
echo "<th>Approval</th>";
echo "<th>Action</th>";
echo "</tr>";
echo "</thead>";
$connection=new DatabaseConnection();
$con=$connection->Connect();

$reporters=$connection->Collectors($con);

if ($reporters->num_rows > 0) 
{

    while($row = $reporters->fetch_assoc()) 
    {
      echo "<tbody>";
      echo "<tr>";
      echo "<td>".$row["Id"]."</td>";
      echo "<td style='color:#630f80;'>".$row["Name"]."</td>";
      echo "<td>".$row["Phone"]."<br>";
      echo "<td>".$row["Location"]."<br></td>";
      echo "<td>".$row["Approval"]."<br></td>";
      echo "<td><a href=../Controller/DeleteCollector.php?id=".$row['Id']." style='color:red;font-size:15';> Delete</a> ";
      if($row["Approval"]=="approved"){
        echo "<a href=../Controller/BlockCollector.php?id=".$row['Id']." style='color:red;font-size:15';> Block</a>  ";
      }
      else{
        echo "<a href=../Controller/ApproveCollector.php?id=".$row['Id']." style='color:green;font-size:15';> Approve</a>";
      }
      $_SESSION["C_Name"]=$row["Name"];
      echo "<a href=AssignWorks.php?id=".$row["Id"]."&name=".$row["Name"]." style='color:blue;font-size:15';> Assign Work</a>  </td>";
      echo "</tr>";
      echo"</tbody>";
      echo "</div>";

    }
}








// while (!feof($file)) {
//     $line = fgets($file);
//     $user = explode('|', $line);
//     $UserName=trim($user[0]);

//     echo "<tr>";

//     echo "<td>".$user[0]."</td>";
//     echo "<td>".$user[1]."</td>";
//     echo "<td>".$user[2]."</td>";
//     echo "<td>".$user[3]."</td>";
//     echo "<td><span><a href='#'>Delete</a></span></td>";

//     echo "</tr>";
// }

echo "</table";
echo "</center>";



?>