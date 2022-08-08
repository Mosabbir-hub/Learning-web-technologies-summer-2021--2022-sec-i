<?php 
 session_start();
 include ("EditCheck.php");
 $Name=$UName=$Phone="";
 $file = fopen('users.txt', 'r');
 while (!feof($file)) {
         $line = fgets($file);
         $user = explode('|', $line);
         $UserName=trim($user[0]);

         if($_SESSION["Username"] == $UserName)
         {
            $Name=$user[1];
            $Phone=$user[2];
         }
 }


?>

<html>
<head>
<style>
</style>
</head>
<body >
  <fieldset>
    <center>
    <legend>Profile Editing</legend>
     <form action="" method="post" enctype="">
    <table>
    <tr>
          <td>Name</td>
          <td> <input type="text" name="name" value="<?php echo $Name; ?>" placeholder="Enter Your Name "/></td>
        </tr>

        <tr>
          <td>Username</td>
          <td> <input type="text" name="username" value="<?php echo $_SESSION["Username"];?>" placeholder="Enter Your Username" readonly/></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td> <input type="text" name="phone" value="<?php echo $Phone; ?>" placeholder="Enter Your Phone Number"/></td>
        </tr>

        <tr>
          
          <td></td>
          <td>
            <input type="submit" name="" value="Edit Profile">
          </td>
          </tr>
        </table>
      </form>
      </center>
    </fieldset>

    </form></body></html>




</body>
</html>