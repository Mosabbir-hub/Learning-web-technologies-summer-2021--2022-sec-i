<?php
session_start();
$birth=$_REQUEST['birth'];
$username=$_REQUEST['username'];
$email=$_REQUEST['email'];
$gender=$_REQUEST['gender'];
$dept=$_REQUEST['dept'];

if($username==null || $birth==null || $email== null)
{
    echo "plz submit the form again.";
    echo "go to the registration page.";

}
else{
    $_SESSION['status']=true;
    echo "Congratulation!! Registration completed.";
}


