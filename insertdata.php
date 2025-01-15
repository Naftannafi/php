<?php
require "databaseconnect.php";
$sql = "insert into register(fname,lname,sex) values('Samuel','Ayele','male')";
if(mysqli_query($conn,$sql)){
    echo "data is inserted";
}

else {
    echo "error". mysqli_error($conn);

}
mysqli_close($conn);
?>