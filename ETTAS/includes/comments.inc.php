<?php



  function setComment($conn){


    if(isset($_POST['commentSubmit'])) {
      $uid=$_POST['uid'];
      $date = $_POST['date'];
      $message = $_POST['message'];

      $sql ="INSERT INTO comments (uid,date,message) VALUES ('$uid','$date','$message')";
      $result =mysqli_query($conn,$sql);
    }
  };

  function getComment($conn) {

    $sql ="SELECT * FROM comments";
    $result =mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
      echo $row['message']."</br></br>  ";
    }


  }


 ?>
