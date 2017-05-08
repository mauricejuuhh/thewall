<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>The Wall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="theme-color" content="#0fb8ad">


    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<?php include 'menu.php'; ?>
<div id="center-vak2">
  <?php
        $colum = "id";

    require 'config.php';
    $gid = mysqli_real_escape_string($dbc, trim($_GET["id"]));
    $select = "SELECT * FROM wall_uploads WHERE id='$gid'";
    $result = mysqli_query($dbc, $select);
    if ($result->num_rows > 0) {
  //eenmalige start echo
        while ($row = $result->fetch_assoc()) {

            $urlp = 'images/pf/' . $row["user_name"];
            echo '
            <div class="photo-block2">
        <div class="photo-title2"><div class="pp" style="background-image: url(images/pf/' . $row["user_name"] . '.jpeg); width:30px; height: 30px; background-size: contain;">
        <div class="pp2" style="background-image: url(images/pf/' . $row["user_name"] . '.jpg); background-size: contain; width:30px; height: 30px; "><div class="pp2" style="background-size: contain; background-image: url(images/pf/' . $row["user_name"] . '.png); width:30px; height: 30px; "></div></div></div><span
                    class="photo-title-name2"><b>' . $row["user_name"] . '</b></span></div>
        <img class="photo-photo2" src="' . $row["image"] . '" alt="profielfoto" width="600">
        <div class="photo-end2">
            <b>' . $row["user_name"] . '</b> ' . $row["title"] . '<br>
        </div>

    </div>
    <br>
        ';

        }
  //eenmalige end echo
    } else {
        echo '

        <div style="background-color: #ffffff; width: 100%; border-radius: 4px; text-align: center; line-height: 45px;">
        Er zijn op dit moment geen resultaten beschikbaar
        </div>';
    }
    $dbc->close();
    ?>


 <div class="photo-block"></div><div class="photo-block"></div><div class="photo-block"></div><div class="photo-block"></div>




</div>


</body>
</html>
