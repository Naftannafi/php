<?php
require "databaseconnect.php";
$sql = "CREATE TABLE register(
id int(6) unsigned auto_increment primary key,fname varchar(20) not null,lname varchar(20) not null,sex varchar(6) not null, reg_date timestamp default current_timestamp on update current_timestamp
)";
if(mysqli_query($conn,$sql)){
    echo "table is created";
}

else {
    echo "error". mysqli_error($conn);

}
mysqli_close($conn);
?>