<?php 
    include("../Model/DatabaseConnection.php");
   $ErrName=$ErrUName=$ErrPhone=$ErrPass=$ErrCPass="";
   $error=false;
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

    $Name = $_REQUEST['name'];
    $Username = $_REQUEST['username'];
    $Phone=$_REQUEST['phone'];
	$password = $_REQUEST['password'];
	$confirmPassword=$_REQUEST['cpassword'];


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

    if($password==""){
        $error=true;
        $ErrPass="Password Can not be empty";
    }
    else if(strlen($password)<6){
        $error=true;
        $ErrPass="Password must Contain 6 Char";
    } 
    else{
        $error=false;
        $ErrPass="";
    }
    if($confirmPassword==""){
        $error=true;
        $ErrCPass="Confirm Password Can not be empty";
    }
    else if(strlen($confirmPassword)<6){
        $error=true;
        $ErrCPass="Confirm Password must Contain 6 Char";
    } 
    else{
        $error=false;
        $ErrCPass="";
    }

    if($confirmPassword!=$password){
        $error=true;
        $ErrCPass="Password and Confirm Password doesn't match!!";
    }
    else{
        $error=false;
        $ErrCPass="";
    }


    
if($error==false){
		// $data = $Username."|".$Name."|".$Phone."|".$password."\r\n";
		// $file = fopen('Users.txt', 'a');
		// fwrite($file, $data);


        $db=new DatabaseConnection();
        $conn=$db->Connect();
        $result=$db->Registration($conn,$Name,$Username,$Phone,$password);

	}

}

?>