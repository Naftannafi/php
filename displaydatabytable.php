<?php
require "databaseconnect.php";
$sql = "select id ,fname,lname,sex from register";
$result = mysqli_query($conn,$sql);
echo "<table border = 1>";
echo "<tr> <td> ID</td> <td> Fname</td> <td> Lname</td> <td> Sex</td></tr>";


while($row= mysqli_fetch_assoc($result)){
    echo "<tr> <td>{$row["id"]}</td> <td>{$row["fname"]}</td> <td>{$row["lname"]}</td> <td>{$row["sex"]}</td></tr>";
}
echo "</table>";
mysqli_close($conn);

?>