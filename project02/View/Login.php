<?php 
    session_start();
  include ("../Controller/LoginCheck.php");
  
  if(isset($_SESSION["Username"])){

    header("location: Home.php");
}
?>
<html>
<head>
<script src="../Controller/LoginValidation.js"></script>
<link rel="stylesheet" type="text/css" href="../Asset/navbar.css">
<link rel="stylesheet" type="text/css" href="../Asset/Input.css">
<style>

</style>
</head>
<body>
<ul>
        <li><a class="active" href="Login.php">Login</a></li>
        <li><a  href="Registration.php">Registration</a></li>
    </ul>
   
  <form action="" method="post" onsubmit="return Validation()" enctype="">
    
     <fieldset>
     <center>
      <legend>LOGIN</legend>
      <table>
        <tr>
          <td>Username</td>
          <td> <input type="text" name="username" id="username" value="" placeholder="Enter Your Username"/><?php echo $ErrUName; ?> </td><td><p id="errorUser"></p></td>
        </tr>
        <tr>
          <td>Password </td>
          <td> <input type="password" name="password" id="password" value="" placeholder="Enter Your Password"/><?php echo $ErrPass; echo $Status; ?></td><td> <p id="errorpass"></p></td>
       </tr>
       <tr>
          <td></td>
          <td>
            <input type="submit" name="" value="Login">
            <span>Don't have an account? <a href="Registration.php"> Register</a></span>
        </td>
           
          </tr>
        </table>
        </center>
      </fieldset>
    </form>
  
</body></html>




</body>
</html>