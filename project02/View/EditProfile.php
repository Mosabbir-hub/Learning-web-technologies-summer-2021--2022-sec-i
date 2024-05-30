<?php 
//include("../Model/DatabaseConnection.php");
 session_start();
 include ("../Controller/EditCheck.php");
 $Name=$UName=$Phone="";




//  $file = fopen('users.txt', 'r');
//  while (!feof($file)) {
//          $line = fgets($file);
//          $user = explode('|', $line);
//          $UserName=trim($user[0]);

//          if($_SESSION["Username"] == $UserName)
//          {
//             $Name=$user[1];
//             $Phone=$user[2];
//          }
//  }
?>
<link rel="stylesheet" type="text/css" href="../Asset/navbar.css">
<link rel="stylesheet" type="text/css" href="../Asset/Input.css">
<ul>
        <li><a  href="Login.php">Home</a></li>
        <li><a   class="active" href="Profile.php">Profile</a></li>
        <li><a   href="../Controller/Logout.php">Logout</a></li>
        <li><a href="#">About</a></li>
    </ul>
<?php 

$db=new DatabaseConnection();
$conn=$db->Connect();
$result=$db->GetValue($conn,$_SESSION["Username"]);

if(mysqli_num_rows($result)>0)
{

    while($row = $result->fetch_assoc())
    {



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
          <td> <input type="text" name="name" value="<?php echo $row["Name"]; ?>" placeholder="Enter Your Name "/></td>
        </tr>

        <tr>
          <td>Username</td>
          <td> <input type="text" name="username" value="<?php echo $_SESSION["Username"];?>" placeholder="Enter Your Username" readonly/></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td> <input type="text" name="phone" value="<?php echo $row["Phone"]; ?>" placeholder="Enter Your Phone Number"/></td>
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


<?php 

}
}
?>

</body>
</html>