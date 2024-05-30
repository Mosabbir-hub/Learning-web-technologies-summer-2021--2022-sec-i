<?php
require("../Model/DatabaseConnection.php");
        $id=$_REQUEST["id"];

        $connection=new DatabaseConnection();
        $conobj=$connection->Connect();
        $result=$connection->ApproveCollector($conobj,$id);
        header("Location: ../View/Collectors.php");
 
?>