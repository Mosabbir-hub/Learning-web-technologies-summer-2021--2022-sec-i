<?php 

echo "<center>";
echo "<h2>All Repoters List</h2>";
echo "<table>";
echo "<tr>";
echo "<th>SL</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Location</th>";
echo "<th>Action</th>";
echo "</tr>";
$file = fopen('Repoters.txt', 'r');
while (!feof($file)) {
    $line = fgets($file);
    $user = explode('|', $line);
    $UserName=trim($user[0]);

    echo "<tr>";

    echo "<td>".$user[0]."</td>";
    echo "<td>".$user[1]."</td>";
    echo "<td>".$user[2]."</td>";
    echo "<td>".$user[3]."</td>";
    echo "<td><span><a href='#'>Delete</a></span></td>";

    echo "</tr>";
}

echo "</table";
echo "</center>";



?>