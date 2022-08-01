<?php 

    $json = $_POST['data'];
    sleep(3);
    $student = json_decode($json);
    print_r($student);
    echo $student->username;
    $student = ['username'=>'mosabbir', 'password'=>'321', 'email'=>'mosabbir@aiub.edu'];
    echo $json;
?>