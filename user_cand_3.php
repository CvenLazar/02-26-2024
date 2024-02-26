<?php
$name = $_REQUEST['Candidate'];



//database connection
include('dbConnect.php');

$sql = "update voting 
set totalvotes = totalvotes + 1
where candidate = '$name'";

if ($conn->query($sql) === TRUE) {
    header('location: successfully.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('location:successfully.php');
?>  