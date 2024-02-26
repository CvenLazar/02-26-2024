<?php
include('dbConnect.php');

$lname = $_REQUEST['Lname'];
$fname = $_REQUEST['Fname'];
$mname = $_REQUEST['Mname'];
$email = $_REQUEST['Email'];
$contact = $_REQUEST['Contact'];
$bday =  $_REQUEST['Birthday'];
if($_REQUEST['Course'] === "BSIT"){
    $deptid = 1;
    $courseid = 11;
}
else if($_REQUEST['Course'] === "BSCS"){
    $deptid = 1;
    $courseid = 12;
}
else if($_REQUEST['Course'] === "ACT"){
    $deptid = 1;
    $courseid = 13;
}
else if($_REQUEST['Course'] === "BAPolSci"){
    $deptid = 2;
    $courseid = 14;
}
else if($_REQUEST['Course'] === "BAComm"){
    $deptid = 2;
    $courseid = 15;
}
else if($_REQUEST['Course'] === "BSPsy"){
    $deptid = 2;
    $courseid = 16;
}
else{
    $deptid = 3;
    $courseid = 17;
}

$sql = "INSERT INTO students (courseid, deptid,  lname, fname, mname, birthday, contact, email)
 VALUES ('$courseid', '$deptid', '$lname', '$fname', '$mname',  '$bday', '$contact', '$email')";

if ($conn->query($sql) === TRUE) {
    header('location: successfully.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?> 