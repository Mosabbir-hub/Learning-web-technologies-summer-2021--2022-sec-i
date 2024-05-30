<?php 
include("../Model/DatabaseConnection.php");

    $ErrUName=$ErrPass=$Status="";
    $error=false;
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

    $Username = $_REQUEST['username'];
    $Password = $_REQUEST['password'];


    if($Username==""){
        $error=true;
        $ErrUName="Username Can not be empty";
    }
    else if(strlen($Username)<5){
        $error=true;
        $ErrUName="Username must contain 3 letter";
    }
    else{
        $error=false;
        $ErrUName="";
    }
  


    if($Password==""){
        $error=true;
        $ErrPass="Password Can not be empty";
    }
    else if(strlen($Password)<6){
        $error=true;
        $ErrPass="Password must Contain 6 Char";
    } 
    else{
        $error=false;
        $ErrPass="";
    }





    if($error==false){
        $check=false;

        $db=new DatabaseConnection();
        $conn=$db->Connect();
        $result=$db->Login($conn,$Username,$Password);

        if(mysqli_num_rows($result)>0){
            echo " Login Success";
            while($row = $result->fetch_assoc())
            {
                $_SESSION["Username"]=$row["Username"];
     
            }
     
     
        }







        // $file = fopen('users.txt', 'r');
        // while (!feof($file)) {
        //         $line = fgets($file);
        //         $user = explode('|', $line);
        //         if($Username == $user[0] && $Password == trim($user[3]))
        //         {
        //         $check=true;
        //            $Status="Login Success !!";
        //            $_SESSION["Username"]=$Username;
        //         }
        // }

        if($check==false){
            $Status="Login Failed !!";
        }
    }
}



?>