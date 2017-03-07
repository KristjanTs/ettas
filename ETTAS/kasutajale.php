<?php
include "header.php";
if(isset($_SESSION['id'])){
}

else {
  header("Location: pealeht.php?error=login");
  exit();
}
include "dbh.php";
include "includes/comments.inc.php";
date_default_timezone_set('Europe/Tallinn');

?>

<div class="container rounded">
  <div class="page-header">
    <h3>Liikmete osa</h3>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
      <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#tekst1">Teema</button>
      <div id="tekst1" class="collapse">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu enim ut tellus dapibus convallis. In eleifend libero odio, eget accumsan nibh viverra non. Sed vitae pretium erat. Vivamus hendrerit mi non dui fermentum, a molestie lorem ultrices. Pellentesque porta nisi elit, vitae tempus enim lobortis non.<br /><br />
        <?php
        echo "<form method='POST' action='".setComment($conn)."'>
        <input type='hidden' name='uid' value='".$_SESSION['id']."' />
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."' />
        <textarea name='message' placeholder='Avalda arvamust'></textarea><br />
        <button type='submit' name='commentSubmit' class='btn btn-primary'>Comment</button>
        </form>";
        getComment($conn);
        ?>
      </div>
    <br />

  </div>
  <div class="col-lg-6 col-md-12 col-sm-12">
    <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#tekst2">Teema</button>
    <div id="tekst2" class="collapse">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu enim ut tellus dapibus convallis. In eleifend libero odio, eget accumsan nibh viverra non. Sed vitae pretium erat. Vivamus hendrerit mi non dui fermentum, a molestie lorem ultrices. Pellentesque porta nisi elit, vitae tempus enim lobortis non.

    </div>
  </div>

</div>
<br />
<div class="row">
  <div class="col-lg-6 col-md-12 col-sm-12">
    <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#tekst3">Teema</button>
    <div id="tekst3" class="collapse">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu enim ut tellus dapibus convallis. In eleifend libero odio, eget accumsan nibh viverra non. Sed vitae pretium erat. Vivamus hendrerit mi non dui fermentum, a molestie lorem ultrices. Pellentesque porta nisi elit, vitae tempus enim lobortis non.

    </div>
  <br />
</div>
<div class="col-lg-6 col-md-12 col-sm-12">
  <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#tekst4">Teema</button>
  <div id="tekst4" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu enim ut tellus dapibus convallis. In eleifend libero odio, eget accumsan nibh viverra non. Sed vitae pretium erat. Vivamus hendrerit mi non dui fermentum, a molestie lorem ultrices. Pellentesque porta nisi elit, vitae tempus enim lobortis non.

  </div>
</div>

</div>



</div>


<footer>
  <hr />
  <p>
    © 2017 Eesti Töötervishoiuarstide Selts
  </p>
</footer>
</body>
</html>
