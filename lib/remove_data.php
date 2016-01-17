<?php require_once '../includes/DB.php'; ?>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$maindb = new DB();
$conn = $maindb->getCon();

$pid = $_GET["pid"];
$pname = $_GET["pname"];

$sql = "delete from reserve_hall where hall_id='" . $pid . "'";
$sqlstmt = $conn->query($sql);
if ($sqlstmt === TRUE) {
    $sqltwo = "update halls set reserved = 'no' where id ='" . $pid . "'";
    $result = $conn->query($sqltwo);
    echo 'Deleted Successfully';
} else {
    echo 'Deleted Failed';
}



$conn->close();
?>

