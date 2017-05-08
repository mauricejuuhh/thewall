<?php

$gebruiker = $_GET['gebruiker'];


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
    <div style="overflow: hidden;" id="midavatar">
        <div style="width: 100%; height: 100%;  background-image: url('images/pf/<?php echo $gebruiker; ?>.png'); background-size: contain;">
            <div style="width: 100%; height: 100%; background-image: url('images/pf/<?php echo $gebruiker; ?>.jpg'); background-size: contain;">
                <div style="width: 100%; height: 100%; background-image: url('images/pf/<?php echo $gebruiker; ?>.jpeg'); background-size: contain;"></div>
            </div>
        </div>
    </div>
    <div id="mid" style="width: 360px; padding: 20px;">
        <div id="twee">
            <b>Gefeliciteerd <?php echo $gebruiker; ?>!</b><br><br>
            Je bent nu officieel lid geworden van Instagram<br>
            <form action="login.php"><input type="submit" value="ga naar instagram" class="login-submit"
                                            style="width: 360px; margin-left: 0px; margin-top: 31px;"></form>
        </div>
    </div>
</div>
<script>
    changeImage(<?php echo $gebruiker; ?>);
</script>
<script src="succes.js"></script>
</body>
</html>
