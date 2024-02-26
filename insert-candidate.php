<?php
include('dbConnect.php');

$lname = $_REQUEST['Lname'];
$fname = $_REQUEST['Fname'];
$sex = $_REQUEST['Sex'];
$email = $_REQUEST['Email'];
$contact = $_REQUEST['Contact'];
$position =  $_REQUEST['Position'];
$platform =  $_REQUEST['Platform'];
$achievement =  $_REQUEST['Achievements'];
if($_REQUEST['Department'] === "CITCS"){
    $deptid = 1;
}
else if($_REQUEST['Department'] === "CAS"){
    $deptid = 2;
}
else {
    $deptid = 3;
}


$sql = "INSERT INTO candidates (deptid, lname, fname, gender, email, contact, position, platform,achievements)
 VALUES ( '$deptid', '$lname', '$fname', '$sex', '$email', '$contact', '$position', '$platform', '$achievement')";

if ($conn->query($sql) === TRUE) {
    header('location: successfully.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?> 