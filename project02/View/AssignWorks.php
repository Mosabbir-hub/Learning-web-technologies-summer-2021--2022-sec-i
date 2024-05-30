<?php 
session_start();
  include ("../Controller/AssignCollector.php");
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
          <td>Collector Id</td>
          <td> <input type="text" name="id" value="<?php echo $_REQUEST["id"];?>" /></td>
        </tr>
    <tr>
          <td>Name</td>
          <td> <input type="text" name="name" value="<?php echo $_REQUEST["name"];?>" /></td>
        </tr>

        <tr>
          <td>Location</td>
          <td> <input type="text" name="location" value="" /></td>
        </tr>
        <tr>
          <td>Date</td>
          <td> <input type="date" name="date" value="" /></td>
        </tr>

        <tr>
          
          <td></td>
          <td>
            <input type="submit" name="" value="Assign">
          </td>
          </tr>
        </table>
      </form>
      </center>
    </fieldset>

    </form></body></html>




</body>
</html>