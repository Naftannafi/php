<?php
require "databaseconnect.php";
$sql = "insert into register(fname,lname,sex) values(?,?,?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Preparation failed: " . $conn->error);
}

$stmt->bind_param("sss",$fname,$lname,$sex);

$fname="Daniel";
$lname="Solomon";
$sex="male";
$stmt->execute();

$fname="Beza";
$lname="Solomon";
$sex="female";
$stmt->execute();

$fname="Abel";
$lname="Gemachis";
$sex="male";
$stmt->execute();


if($stmt->execute()){
    echo "data is inserted";
}

else {
    echo "error". mysqli_error($conn);

}
$stmt->close();
mysqli_close($conn);
?>