<?php
session_start();
include '../dbh.php';

$first= $_POST['first'];
$last= $_POST['last'];
$uid= $_POST['uid'];
$pwd= $_POST['pwd'];


$hash = password_hash($pwd, PASSWORD_DEFAULT);
$sql="INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$hash')";
$result = mysqli_query($conn,$sql);

header("Location: ../index.php");

?>
