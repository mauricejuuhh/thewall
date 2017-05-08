<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>The Wall</title>
    <meta name="description" content="steun giro 555 zodat frank stopt met tf2 en boyd stopt met dota. Alvast bedankt.">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="theme-color" content="#0fb8ad">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body style="height:100vh;">
<?php include 'menu.php'; ?>
<div id="login-logo"></div>
<div id="border-mid">
    <div id="mid">


        <form method="post" enctype="multipart/form-data">
            <label style="cursor: pointer;" for="files">
                <div id="login-photo">
                    <div id="image"></div>
                    <div id="upload-label"><b>upload</b></div>
                </div>
            </label>
            <input autofocus required type="text" name="username" placeholder="username" class="login-login" id="login1"
                   style="margin-top: 27px;">
            <input required type="email" name="mailadres" placeholder="email" id="login2" class="login-login">


            <input hidden required type="file" name="pfupload" class="login-submit" id="files">
            <input type="submit" name="submit" class="login-submit" style="width: 209px; border: 0px; color:white;"
                   id="submit" value="registreer">
        </form>

    </div>
</div>
<script src="script.js"></script>
<script src="login.js"></script>
<?php

if (isset($_POST['submit'])) {

    require 'config.php';

    $username = mysqli_real_escape_string($dbc, trim($_POST["username"]));
    $mailadres = mysqli_real_escape_string($dbc, trim($_POST["mailadres"]));


        $query = "INSERT INTO wall_users(username, email) VALUES ('$username', '$mailadres')";
        $result = mysqli_query($dbc, $query);
        $random = rand(1000, 9999);

        $key_query = "INSERT INTO wall_email_key(username, sleutel) VALUES ('$username', '$random')";
        $result2 = mysqli_query($dbc, $key_query);
        mysqli_close($dbc);

        $subject = 'Hallo' . $username . '! Welkom op Instagram.';
        $bericht = '
			Hallo ' . $username . '!<br>

			Welkom op The Wall. <br>
			Uw bent bijna klaar met uw registratie <br>
			Kopieer de code hieronder zodat u verder kunt gaan met uw registratie <br>
				<b> ' . $random . ' </b><br>
			Wij heten u alvast van harte welkom op The Wall.
        ';
        $headers = "Welkom@thewall.nl \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        mail($mailadres, $subject, $bericht, 'From:' . $headers);


        $temp = $_FILES['pfupload']['tmp_name'];
        $type = $_FILES['pfupload']['type'];
        $name = str_replace("image/", $username . ".", $type);
        $target = "images/pf/" . $name;
        move_uploaded_file($temp, $target);
        header("location: verificatie-register.php?gebruiker=" . $username);



}
?>
</body>
</html>
