<nav><?php if (empty($_SESSION["loggedin"])) {
        echo '
  <div id="menuleft">
  <a href="index.php"><div class="menu">Home</div></a>
  <a href="login.php"><div class="menu">login</div></a>
  <a href="register.php"><div class="menu">Register</div></a>
</div>';
    } else if ($_SESSION["loggedin"] == 1) {
        echo '
      <div id="menuleft">
  <a href="index.php"><div class="menu">Home</div></a>
  <a href="upload.php"><div class="menu">upload</div></a>
  <a href="loguit.php"><div class="menu">log uit</div></a>
</div>
    ';
  } 
    ?>
</nav>
