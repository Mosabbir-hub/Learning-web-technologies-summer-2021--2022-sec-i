<?php
require("../Model/DatabaseConnection.php");
        $id=$_REQUEST["id"];

        $connection=new DatabaseConnection();
        $conobj=$connection->Connect();
        $result=$connection->Delete($conobj,$id,"Collectors");
        header("Location: ../View/Collectors.php");
 
?>