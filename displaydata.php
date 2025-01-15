<?php
require "databaseconnect.php";
$sql = "select id ,fname,lname,sex from register";
$result = mysqli_query($conn,$sql);
while($row= mysqli_fetch_assoc($result)){
    echo $row["id"].$row["fname"].$row["lname"].$row["sex"]."<br>";
}
mysqli_close($conn);

?>