<?php
  include "header.php";
 ?>
  <div class="container rounded">
      <div class="page-header">
        <h3>Tere tulemast Eesti Töötervishoiuarstide Seltsi veebilehele!</h3>
        <?php

          $url=$_SERVER['REQUEST_URI'];
          if (strpos($url,'error=pw') !== false){
            echo "</br><p class='text-center' id='error'>Vale kasutajanimi või parool.</p>";
          }
          if(isset($_SESSION['id'])){
            echo "<p>
            Olete sisse logitud!
            </p>";

          }

          ?>
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
