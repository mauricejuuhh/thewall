<?php

require 'config.php';

$username = mysqli_real_escape_string($dbc, trim($_GET["username"]));
$vercode = mysqli_real_escape_string($dbc, trim($_GET["vercode"]));

$query1 = "SELECT `sleutel` FROM `email_key` WHERE username='$username'";
$result1 = mysqli_query($dbc, $query1);
$row1 = $result1->fetch_assoc();
?>
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
<?php include 'menu.php'; ?>

<div id="login-logo"></div>
<div id="border-mid">
    <div id="midavatar"></div>
    <div id="mid" style="width: 360px; padding: 20px;">
        <?php if ($vercode == $row1['sleutel']) {

            echo '
      <div id="een"><b>Maak uw wachtwoord aan</b><br><br>
<form method="post" >
<input autofocus required type="password" style="float: left; margin-left: 0px;" placeholder="Uw wachtwoord" name="wachtwoord" id="wachtwoord" class="login-login">
<input required type="password" style="float: left; margin-left: 0px;" placeholder="Opnieuw uw wachtwoord" name="wachtwoord2" id="wachtwoord2" class="login-login">
<input hidden type="text" name="username" value="' . $username . '">
<input style="width: 66px; margin-left: 10px;" name="submit" type="submit" value="verstuur" id="done" class="login-submit">
</form>
    </div>
    ';
            if (isset($_POST['submit'])) {

                $wachtwoord = mysqli_real_escape_string($dbc, trim($_POST["wachtwoord"]));
                $wachtwoord2 = mysqli_real_escape_string($dbc, trim($_POST["wachtwoord2"]));
                $hashed_password = hash('sha512', $wachtwoord);
                if ($wachtwoord == $wachtwoord2) {
                    $query2 = "UPDATE users SET password='$hashed_password' WHERE username='$username'";
                    $result2 = mysqli_query($dbc, $query2);
                    $query3 = "DELETE FROM `email_key` WHERE username='$username'";
                    $result3 = mysqli_query($dbc, $query3);
                    header("location: succes.php?gebruiker=" . $username);
                } else {
                    echo '<b><br><br><br>uw wachtwoord is niet gelijk</b>';
                }

            }

        } else {
            echo '
      <div id="een"><b>Code onjuist</b><br><br>

De code die je ingevult hebt is onjuist.<br>
Probeer het opnieuw.

    </div>
    ';
        }

        mysqli_close($dbc);
        ?>
        <div id="twee">
            <b>Gefeliciteerd Mauricejuuhh!</b><br><br>
            Je bent nu officieel lid geworden van Instagram<br>
            <form action="index.php"><input type="submit" value="ga naar instagram" class="login-submit"
                                            style="width: 360px; margin-left: 0px; margin-top: 31px;"></form>
        </div>
    </div>
</div>

<script src="verification-script.js"></script>
</body>
</html>
