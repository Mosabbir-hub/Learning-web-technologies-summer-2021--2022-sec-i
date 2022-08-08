<?php
include ("RegCheck.php");
?>
<html>
<head>
<style>
</style>
</head>
<body>
  <fieldset>
    <center>
    <legend>REGISTRATION</legend>
     <form action="" method="post" enctype="">
    <table>
    <tr>
          <td>name</td>
          <td> <input type="text" name="name" value="" placeholder="Enter Your Name "/><?php echo $ErrName; ?></td>
        </tr>

        <tr>
          <td>username</td>
          <td> <input type="text" name="username" value="" placeholder="Enter Your Username"/><?php echo $ErrUName; ?></td>
        </tr>
        <tr>
          <td>phone</td>
          <td> <input type="text" name="phone" value="" placeholder="Enter Your Phone Number"/><?php echo $ErrPhone; ?></td>
        </tr>

        <tr>
          <td>password</td>
          <td> <input type="password" name="password" value="" placeholder="Enter Your Password" /><?php echo  $ErrPass;?></td>
        </tr>
         <tr>
          <td>confirmpassword</td>
          <td> <input type="password" name="cpassword" value="" placeholder="Enter Your Confirm Password"/><?php echo $ErrCPass; ?></td><br>
        </tr>
          
          <td></td>
          <td>
            <input type="submit" name="" value="Sign up">
            <span>Already have an account?<a href="Login.php"> SignIn</a></span>
          </td>
          </tr>
        </table>
      </form>
      </center>
    </fieldset>

    </form>
	</body>
	</html>




</body>
</html>