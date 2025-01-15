<?php
require "databaseconnect.php";
$sql = "create database phpdata";
if(mysqli_query($conn,$sql)){
    echo "database is created";
}

else {
    echo "error". mysqli_error($conn);

}
mysqli_close($conn);
?>