<?php
include "..\Model\DatabaseConnection.php";
$Pid=$Pname=$Pdesc=$Pcat=$Pprice=""; 
$UserType="";
$hasError=false;
$error=""; 



$Pname=$_POST["name"];
if($Pname=="")
{
  echo "Enter Collector Name !!"; 
}
else 
{
$connection = new DatabaseConnection();
$conobj=$connection->Connect();

$userQuery=$connection->SearchCollector($conobj,$Pname);

if ($userQuery->num_rows > 0) {

    while($row = $userQuery->fetch_assoc()) {

      echo "Reporter ID : ".$row["Id"]."<br>";
      echo "<p style='color:#630f80;'>Reporter Name : ".$row["Name"]."</p>";
      echo "Phone : ".$row["Phone"]."<br>";
      echo "Location : ".$row["Location"]."<br>";
      echo "<p style='color:#9e1653;'>Arroval : ".$row["Approval"]."</p></div><br>";

      
     
      
  } 

}
else 
echo "Product Not Found !!!<br>";
}
?>
