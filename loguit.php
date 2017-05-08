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
<? include 'menu.php'; ?>

<div id="login-logo"></div>
<div id="border-mid">
    <div id="mid" style="width: 360px; padding: 20px; height: 115px;">

        <b><?php echo $_SESSION["username"]; ?>???</b><br><br>
         Weet je het zeker dat je wilt uitloggen?
        <form method="post"><input name="submit" type="submit" value="Ik weet het zeker" class="login-submit"
                                        style=" margin-left: 0px; margin-top: 31px;"></form>

    </div>
</div>

<?php
if (isset($_POST['submit'])) {
    session_unset();
    session_destroy();
    header("location: index.php");
}
?>
</body>
</html>
