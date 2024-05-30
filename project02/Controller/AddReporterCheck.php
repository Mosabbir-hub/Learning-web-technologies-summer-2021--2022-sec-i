<?php 
    include("../Model/DatabaseConnection.php");
   $ErrName=$ErrUName=$ErrPhone=$ErrPass=$ErrCPass="";
   $error=false;
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

    $Name = $_REQUEST['name'];
    $Location = $_REQUEST['location'];
    $Phone=$_REQUEST['phone'];



    if($Name==""){
        $error=true;
        $ErrName="Name Can not be empty";
    }
    else if(strlen($Name)<5){
        $error=true;
        $ErrName="Name must contain 5 letter";
    }
    else{
        $error=false;
        $ErrName="";
    }


    if($Phone==""){
        $error=true;
        $ErrPhone="Phone Number Can not be empty";
    }
    else if(strlen($Phone)<11){
        $error=true;
        $ErrPhone="Phone must Contain 11 Number";
    } 
    else{
        $error=false;
        $ErrPhone="";
    }



    
if($error==false){



        $db=new DatabaseConnection();
        $conn=$db->Connect();
        $result=$db->AddReporter($conn,$Name,$Phone,$Location,"approved");

	}

}

?>