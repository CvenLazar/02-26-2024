<?php
$snum = $_REQUEST['StudentNo'];
$cand = $_REQUEST['Candidate'];
if($_REQUEST['Department'] === "CITCS"){
    $deptid = 1;
}
else if($_REQUEST['Department'] === "CAS"){
    $deptid = 2;
}
else {
    $deptid = 3;
}



//database connection
include('dbConnect.php');

$sql = "INSERT INTO voting (studentno, deptid, candidate,totalvotes)
 VALUES ('$snum', '$deptid', '$cand')";

if ($conn->query($sql) === TRUE) {
    header('location: successfully.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('location:user_cand_3.php');
?>  