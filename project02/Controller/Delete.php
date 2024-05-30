<?php
require("../Model/DatabaseConnection.php");
        $id=$_REQUEST["id"];

        $connection=new DatabaseConnection();
        $conobj=$connection->Connect();
        $result=$connection->Delete($conobj,$id,"reporters");
        header("Location: ../View/Repoter.php");
 
?>