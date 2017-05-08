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
<body style="height:100vh;">
<?php include 'menu.php'; ?>

<div id="login-logo"></div>
<div id="border-mid">
    <div id="mid" style="padding: 20px; width: 360px; height: 140px;">
        <form method="post" enctype="multipart/form-data">
            Upload
            <input type="file" style="width: 235px;" required name="fileToUpload" class="login-submit" id="fileToUpload">
            <input type="text" name="title" placeholder="titel" id="login2" class="login-login" style="width: 208px; margin-left: 80px;">
            <input type="submit" class="login-submit" style="margin-left: 81px; width: 225px;" value="Upload Image" name="submit">
        </form>
        <?php

        if (isset($_POST['submit'])) {
            require 'config.php';

            $id = $_SESSION['id'];
            $title = $_POST['title'];
            $username = $_SESSION['username'];

            $temp = $_FILES['fileToUpload']['tmp_name'];
            $target = "images/upload/" . $_SESSION["username"] . date("Y-m-d-H:i:s") . $_FILES['fileToUpload']['name'];
            move_uploaded_file($temp, $target);
            $insertImage = "INSERT INTO wall_uploads(title, image, user_id, user_name) VALUES ('$title', '$target', '$id', '$username')";
            $result = mysqli_query($dbc, $insertImage);

            header("location: index.php");
        }
        ?>

    </div>
</div>
</body>
</html>
