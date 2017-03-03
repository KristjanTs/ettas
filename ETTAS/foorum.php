<?php
  include "header.php";

  if (isset($_SESSION['id'])) {

  }
  else {
    header("Location: pealeht.php?error=login");
    exit();
  }
 ?>

  <div class="container rounded">
      <div class="page-header">
        <h3>Kontakt</h3>
      </div>


      <p>
        EESTI TÖÖTERVISHOIUARSTIDE SELTSI FOORUM
      </p>



  </div>

  <footer>
    <hr />
    <p>
      © 2017 Eesti Töötervishoiuarstide Selts
    </p>
  </footer>
</body>
</html>
