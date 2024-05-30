<?php 
include("../Model/DatabaseConnection.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $Name = $_REQUEST['name'];
    $Phone = $_REQUEST['phone'];

    if($Name != "" && $Phone!="" ){
        // $file = fopen('users.txt', 'r+','a');
        // while (!feof($file)) {
        //         $line = fgets($file);
        //         $user = explode('|', $line);
        //         $UserName=trim($user[0]);
       
        //         if($_SESSION["Username"] == $UserName)
        //         {
        //            $data = $_SESSION["Username"]."|".$Name."|".$Phone."|".$user[3]."\r\n";
        //            fwrite($file, $data);

        //         }
        // }


        $db=new DatabaseConnection();
        $conn=$db->Connect();
        $result=$db->UpdateProfile($conn,$Name,$Phone);

    }

}



?>