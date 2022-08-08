<?php 
    session_start();
  include ("LoginCheck.php");
  if(isset($_SESSION["Username"])){

    header("location: Home.php");
}
?>
<html>
<head>
<style>

</style>
</head>
<body>
   
  <form action="" method="post" enctype="">
    
     <fieldset>
     <center>
      <legend>LOGIN</legend>
      <table>
        <tr>
          <td>Username</td>
          <td> <input type="text" name="username" value="" placeholder="Enter Your Username"/><?php echo $ErrUName; ?></td>
        </tr>
        <tr>
          <td>Password </td>
          <td> <input type="password" name="password" value="" placeholder="Enter Your Password"/><?php echo $ErrPass; echo $Status; ?></td>
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