<?php
session_start();
include '../dbh.php';

$uid= $_POST['uid'];
$pwd= $_POST['pwd'];

$sql="SELECT * FROM user WHERE uid='$uid'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$hash_pw = $row['pwd'];
$hash = password_verify($pwd, $hash_pw);

if ($hash == 0) {
  header("Location: ../pealeht.php?error=pw");
  exit();
}
else {

  $sql="SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pw'";
  $result = mysqli_query($conn,$sql);

  if (empty($uid)) {
    header("Location: ../pealeht.php?error=empty");
    exit();
  }
  if (empty($pwd)) {
    header("Location: ../pealeht.php?error=empty");
    exit();
  }
  else {
    if(!$row=mysqli_fetch_assoc($result)){
      header("Location: ../pealeht.php");
      echo "Incorrect username or password!";
    }
    else{
      $_SESSION['id']=$row['id'];
      header("Location: ../pealeht.php");
    }

  }
}

?>
