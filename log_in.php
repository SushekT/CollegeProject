<?php
session_start();

include 'dbh.php';

$id = $_POST['id'];
$pwd= $_POST['pwd'];

/*$ID = $_POST['id'];
$pwd = $_POST['pwd'];

echo $ID ."<br>";
echo $pwd ."<br>";*/

$sql= "SELECT * FROM user WHERE id='$id' AND pwd='$pwd'";
$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()) {
	echo "Your information is not correct!!!";
}
else{
	$_SESSION['id'] = $row['id'];
}


header("Location: index.php");