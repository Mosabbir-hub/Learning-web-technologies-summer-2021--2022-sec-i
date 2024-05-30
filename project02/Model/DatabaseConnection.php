<?php 
class DatabaseConnection{

    function Connect()
    {
           $dbhost = "localhost";
           $dbuser = "root";
           $dbpass = "";
           $db = "crowdfunding";
    
           $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
           return $conn;
    }

 function Registration($conn,$Name,$Username,$Phone,$Password){
    $sql="Insert into manager (Name,Username,Phone,Password) values('{$Name}','{$Username}','{$Phone}','{$Password}')";

    $result = mysqli_query($conn, $sql);
    if($result==true){
        echo "Registration Success";
        header("Location: Login.php");
    }
    else{
        echo "Registration Failed";
    }
 }

 function AddReporter($conn,$Name,$Phone,$Location,$Approval){
   $sql="Insert into reporters (Name,Phone,Location,Approval) values('{$Name}','{$Phone}','{$Location}','{$Approval}')";

   $result = mysqli_query($conn, $sql);
   if($result==true){
       echo "Registration Success";
       header("Location: Login.php");
   }
   else{
       echo "Registration Failed";
   }
}


function AssignWork($conn,$id,$Name,$Location,$Date){
   $sql="Insert into assign (C_ID,C_Name,Location,Date) values('{$id}','{$Name}','{$Location}','{$Date}')";

   $result = mysqli_query($conn, $sql);
   if($result==true){
       echo "Registration Success";
       header("Location: Collectors.php");
   }
   else{
       echo "Registration Failed";
   }
}

function AssignWorks($conn){
   $sql="Select * from assign";

   $result=mysqli_query($conn,$sql);
   return $result;
}

function AddCollector($conn,$Name,$Phone,$Location,$Approval){
   $sql="Insert into collectors (Name,Phone,Location,Approval) values('{$Name}','{$Phone}','{$Location}','{$Approval}')";

   $result = mysqli_query($conn, $sql);
   if($result==true){
       echo "Registration Success";
       header("Location: Login.php");
   }
   else{
       echo "Registration Failed";
   }
}

 function Delete($conn,$id,$table)
{
    $sql="Delete  FROM  $table where Id like '".$id."'";
    $result=mysqli_query($conn,$sql);
   return $result;
}


 function Login($conn,$Username,$Password){
    $sql="Select * from manager where Username Like '".$Username."' and Password Like '".$Password."' ";

    $result=mysqli_query($conn,$sql);
    return $result;
 }
 function GetValue($conn,$Username){
    $sql="Select * from manager where Username Like '".$Username."'";

    $result=mysqli_query($conn,$sql);
    return $result;
 }



 function UpdateProfile($conn,$Name,$Phone){
    $sql="update manager set Name='".$Name."', Phone='".$Phone."' where Username='".$_SESSION["Username"]."'";

    $result = mysqli_query($conn, $sql);
    if($result==true){
        echo "Registration Success";
        header("Location: Login.php");
    }
    else{
        echo "Registration Failed";
    }
 }



 function Block($conn,$id){
    $sql="update reporters set Approval='blocked' where Id='".$id."'";

    $result = mysqli_query($conn, $sql);
    return $result;
 }

 function BlockCollector($conn,$id){
    $sql="update collectors set Approval='blocked' where Id='".$id."'";

    $result = mysqli_query($conn, $sql);
    return $result;
 }
 function Approve($conn,$id){
    $sql="update reporters set Approval='approved' where Id='".$id."'";

    $result = mysqli_query($conn, $sql);
    return $result;
 }

 function ApproveCollector($conn,$id){
    $sql="update collectors set Approval='approved' where Id='".$id."'";

    $result = mysqli_query($conn, $sql);
    return $result;
 }
 function Reporters($conn){
    $sql="Select * from reporters";

    $result=mysqli_query($conn,$sql);
    return $result;
 }
 function SearchReporters($conn,$Name){
   $sql="Select * from reporters where Name like '%". $Name."%'";

   $result=mysqli_query($conn,$sql);
   return $result;
}
function SearchCollector($conn,$Name){
   $sql="Select * from collectors where Name like '%". $Name."%'";

   $result=mysqli_query($conn,$sql);
   return $result;
}

 function Collectors($conn){
    $sql="Select * from collectors";

    $result=mysqli_query($conn,$sql);
    return $result;
 }


}

?>