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
      $id = $row['uid'];
      $sql_userid ="SELECT * FROM user WHERE id='$id'";
      $result_userid =mysqli_query($conn,$sql_userid);
      if($row_userid=mysqli_fetch_assoc($result_userid)){
        echo "<div class='well'><b>".$row_userid['uid']."</b><br /><i>".$row['date']."</i><br /><br />".nl2br($row['message'])."<br /><br />"."</div>";
      }
    }
  }


 ?>
