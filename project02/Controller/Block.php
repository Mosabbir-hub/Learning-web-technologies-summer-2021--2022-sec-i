<?php
require("../Model/DatabaseConnection.php");
        $id=$_REQUEST["id"];

        $connection=new DatabaseConnection();
        $conobj=$connection->Connect();
        $result=$connection->Block($conobj,$id);
        header("Location: ../View/Repoter.php");
 
?>