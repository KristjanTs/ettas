<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Pealeht</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <form action="includes/login.inc.php" method="POST">
    <input type="text" name="uid" placeholder="Username"/><br />
    <input type="password" name="pwd" placeholder="Password"/><br />
    <button type="submit">LOGIN</button>
  </form>

<?php
  if(isset($_SESSION['id'])){
    echo $_SESSION['id'];

  }
  else{
    echo "Not logged in";
  }
  ?>

  <br /><br /><br />

  <form action="includes/signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="Firstname"/><br />
    <input type="text" name="last" placeholder="Lastname"/><br />
    <input type="text" name="uid" placeholder="Username"/><br />
    <input type="password" name="pwd" placeholder="Password"/><br />
    <button type="submit">SIGN UP</button>
  </form>
  <br /><br /><br />
  <form action="includes/logout.inc.php">
    <button type="button" class="btn btn-primary">Välju</button>
  </form>
</body>
</html>
