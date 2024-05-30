<?php 
include("../Model/DatabaseConnection.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{

    $id=$_REQUEST["id"];
    $Name=$_REQUEST["name"];
    $Location=$_REQUEST["location"];
    $Date=$_REQUEST["date"];

    $connection=new DatabaseConnection();
    $conobj=$connection->Connect();
    $result=$connection->AssignWork($conobj,$id,$Name,$Location,$Date);

    header("Location: ../View/Collectors.php");


}


?>