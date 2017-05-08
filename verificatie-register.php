<?php

require 'config.php';

$username = mysqli_real_escape_string($dbc, trim($_GET["gebruiker"]));

$sql = "SELECT email FROM wall_users WHERE username='$username'";
$result = $dbc->query($sql);
$row = $result->fetch_assoc();

$sql1 = "SELECT sleutel FROM email_key WHERE username='$username'";
$result1 = $dbc->query($sql);
$row1 = $result->fetch_assoc();

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

    <div id="mid" style="width: 360px; padding: 20px;">
        <?php echo '
        <b>Hallo ' . $username . '!</b><br><br>
        Er is een verificatie email gestuurd naar:<br>
        <b>' . $row["email"] . '</b><br><br>
        Vul hieronder uw code in.<br>
        <form method="get" action="verificatie-wachtwoord.php">
            <input autofocus required type="text" style="float: left; margin-left: 0;" placeholder="vul uw code in"
                   name="vercode" class="login-login" id="login3">
             <input hidden type="text" name="username" value="' . $username . '">
            <input style="width: 66px; margin-left: 10px;" type="submit" value="verstuur" class="login-submit"
                   id="submit2">
        </form>'; ?>

    </div>

</div>
<script src="login1.js"></script>
</body>
</html>
