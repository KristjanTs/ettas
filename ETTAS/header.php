<?php
session_start();
?>

<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="ETTAS, Eesti Töötervishoiuarstide Selts, Töötervishoid" />
  <meta name="robots" content="index/follow" />
  <title>ETTAS</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
  <?php

function echoActiveClass($requestUri)
{
    $current_file_name = basename($_SERVER['PHP_SELF'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?>
  <header>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container2">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="pealeht.php">ETTAS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav nav1">
            <li <?=echoActiveClass("pealeht")?>><a href="pealeht.php">Avaleht</a></li>
            <li <?=echoActiveClass("liikmed")?>><a href="liikmed.php">Liikmed</a></li>
            <li <?=echoActiveClass("pohikiri")?>><a href="pohikiri.php">Põhikiri</a></li>
            <li <?=echoActiveClass("viited")?>><a href="viited.php">Viited</a></li>
            <li <?=echoActiveClass("materjalid")?>><a href="materjalid.php">Materjalid</a></li>
            <li <?=echoActiveClass("teated")?>><a href="teated.php">Uudised</a></li>
            <li <?=echoActiveClass("phindamine")?>><a href="phindamine.php">Pädevuse hindamine</a></li>
            <li <?=echoActiveClass("arhiiv")?>><a href="arhiiv.php">Arhiiv</a></li>
            <li <?=echoActiveClass("kontakt")?>><a href="kontakt.php">Kontakt</a></li>
            <li <?=echoActiveClass("residentuur")?>><a href="residentuur.php">Residentuur</a></li>
            <?php
              if(isset($_SESSION['id'])){
                echo "<li><a href='kasutajale.php'>Liikmele</a></li>";
              }
             ?>
          </ul>
          <?php
            if(isset($_SESSION['id'])){
              echo "<form action='includes/logout.inc.php'>
                <button id='form1' class='btn btn-primary'>Välju</button>
              </form>";

            }
            else{
              echo "<form class='form-inline my-2 my-lg-0' action='includes/login.inc.php' method='POST'>
                  <div id='form'><input type='text' name='uid' class='form-control mb-2 mr-sm-2 mb-sm-0' id='inlineFormInput' placeholder='Kasutaja' required>
                  <input type='password' name='pwd' class='form-control' id='inlineFormInputGroup' placeholder='Parool' required>
                  <button id='logbtn' type='submit' class='btn btn-primary'>Sisene</button></div>
              </form>";
          }
          ?>


        </div>


      </div>
    </nav>
  </header>
