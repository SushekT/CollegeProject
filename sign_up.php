<?php
session_start();

include 'dbh.php';
$id = $_POST['id'];
$pwd= $_POST['pwd']; 
$first = $_POST['First_name'];
$last = $_POST['Last_name'];

$sql = "INSERT INTO user (id, pwd, First_name, Last_name)
VALUES ('$ID', '$pwd', '$first', '$last');";
$result = $conn->query($sql);

header("Location: index.php");