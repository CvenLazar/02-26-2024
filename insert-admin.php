<?php
include('dbConnect.php');

$lname = $_REQUEST['Lname'];
$fname = $_REQUEST['Fname'];
$email = $_REQUEST['Email'];
$password = $_REQUEST['Password'];

$sql = "INSERT INTO admin (fname, lname, email, password)
 VALUES ( '$lname', '$fname', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header('location: successfully.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?> 