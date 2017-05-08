<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>The Wall</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="theme-color" content="#0fb8ad">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body style="height: 100vh;">
<?php

if (isset($_POST['submit'])) {

    require 'config.php';
    $username = mysqli_real_escape_string($dbc, trim($_POST["username"]));
    $password = mysqli_real_escape_string($dbc, trim($_POST["password"]));

    $hashed_password = hash('sha512', $password);
    $query4 = "SELECT * FROM users WHERE username='$username'";
    $result4 = mysqli_query($dbc, $query4);
    $row4 = $result4->fetch_assoc();

    if ($username == $row4['username'] && $hashed_password == $row4['password']) {

        $_SESSION["id"] = $row4['id'];
        $_SESSION["username"] = $row4['username'];
        $_SESSION["email"] = $row4['email'];
        $_SESSION["admin"] = $row4['admin'];
        $_SESSION["loggedin"] = 1;
        $hoi = 1;
    }

} else {
    $hoi = 0;
}
include 'menu.php'; ?>

<div id="login-logo"></div>
<div id="border-mid">
    <?php


    if ($hoi == 1) {
        echo '
 <div id="mid" style="width: 360px; padding: 20px; height: 115px;">

            <b>Hallo ' . $_SESSION["username"] . '!</b><br><br>
            Je nu ingelogd<br>
            <form action="index.php"><input type="submit" value="ga naar instagram" class="login-submit"
                                            style=" margin-left: 0px; margin-top: 31px;"></form>

    </div>
';
    } else {
        echo '<div id="mid">
      <div id="login-photo"><div style="background-image: url(http://i1.wp.com/www.techrepublic.com/bundles/techrepubliccore/images/icons/standard/icon-user-default.png);" id="een1"><div style="background-image: url(http://i1.wp.com/www.techrepublic.com/bundles/techrepubliccore/images/icons/standard/icon-user-default.png);" id="twee1"><div style="background-image: url(http://i1.wp.com/www.techrepublic.com/bundles/techrepubliccore/images/icons/standard/icon-user-default.png);" id="drie1"></div></div></div></div>
      <form method="post">
        <input autofocus required type="text" name="username" placeholder="username" class="login-login" id="login1" style="margin-top: 27px;">
        <input required type="password" name="password" placeholder="wachtwoord" id="login2" onfocus="changeImage(this)" class="login-login">
        <input type="submit" name="submit" class="login-submit" style=" border: 0px; color:white;" id="submit" value="login">
      </form>
    </div>
    ';
    }

    ?>
</div>
<script>
    var een1 = document.getElementById("een1");
    var twee1 = document.getElementById("twee1");
    var drie1 = document.getElementById("drie1");
    var login1 = document.getElementById("login1");

    function changeImage(x) {
        een1.style.backgroundImage = "url(images/pf/" + login1.value + ".jpg)";
        twee1.style.backgroundImage = "url(images/pf/" + login1.value + ".jpeg)";
        drie1.style.backgroundImage = "url(images/pf/" + login1.value + ".png)";
    }
</script>
<script src="login.js"></script>
</body>
</html>
