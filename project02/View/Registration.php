<?php 
  include ("../Controller/RegCheck.php");
?>

<html>
<head>
<style>
</style>
<script src="../Controller/RegistrationValidation.js" ></script>
<link rel="stylesheet" type="text/css" href="../Asset/navbar.css">
<link rel="stylesheet" type="text/css" href="../Asset/Input.css">
</head>
<body>
<ul>
        <li><a  href="Login.php">Login</a></li>
        <li><a  class="active" href="Registration.php">Registration</a></li>
        <li><a href="#">About</a></li>
    </ul>
  <fieldset>
    <center>
    <legend>REGISTRATION</legend>
     <form action="" method="post" onsubmit="return Validation()" enctype="">
    <table>
    <tr>
          <td>Name</td>
          <td> <input type="text" name="name" id="name" value="" placeholder="Enter Your Name "/><?php echo $ErrName; ?></td><td><p id="errorname"></p></td>
        </tr>

        <tr>
          <td>Username</td>
          <td> <input type="text" name="username" id="username" value="" placeholder="Enter Your Username"/><?php echo $ErrUName; ?></td><td><p id="errorusername"></p></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td> <input type="text" name="phone" id="phone" value="" placeholder="Enter Your Phone Number"/><?php echo $ErrPhone; ?></td><td><p id="errorphone"></p></td>
        </tr>

        <tr>
          <td>Password</td>
          <td> <input type="password" name="password" id="password" value="" placeholder="Enter Your Password" /><?php echo  $ErrPass;?></td><td><p id="errorpass"></p></td>
        </tr>
         <tr>
          <td>Confirm Password </td>
          <td> <input type="password" name="cpassword" id="cpassword" value="" placeholder="Enter Your Confirm Password"/><?php echo $ErrCPass; ?></td><td><p id="errorCpass"></p></td>
        </tr>

        <tr>
          
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

    </form></body></html>




</body>
</html>