<?php 
  include ("../Controller/AddReporterCheck.php");
?>

<html>
<head>
<style>
</style>
</head>
<link rel="stylesheet" type="text/css" href="../Asset/navbar.css">
<link rel="stylesheet" type="text/css" href="../Asset/Input.css">
<ul>
        <li><a  href="Login.php">Home</a></li>
        <li><a    href="Profile.php">Profile</a></li>
        <li><a   href="../Controller/Logout.php">Logout</a></li>
        <li><a href="#">About</a></li>
    </ul>
<body>
  <fieldset>
    <center>
    <legend>Add Reoprter</legend>
     <form action="" method="post" enctype="">
    <table>
    <tr>
          <td>Name</td>
          <td> <input type="text" name="name" value="" placeholder="Enter Your Name "/><?php echo $ErrName; ?></td>
        </tr>

        <tr>
          <td>Phone</td>
          <td> <input type="text" name="phone" value="" placeholder="Enter Your Phone Number "/><?php echo $ErrPhone; ?></td>
        </tr>

        <tr>
          <td>Location</td>
          <td> <input type="text" name="location" value="" placeholder="Enter Your Location "/><?php echo $ErrPhone; ?></td>
        </tr>

        <tr>
          
          <td></td>
          <td>
            <input type="submit" name="" value="Add Reporter">
            
          </td>
          </tr>
        </table>
      </form>
      </center>
    </fieldset>

    </form></body></html>




</body>
</html>