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
<div id="center-vak">


<?php
      $colum = "id";

  require 'config.php';

  $select = "SELECT * FROM wall_uploads WHERE $colum ORDER BY id DESC";
  $result = mysqli_query($dbc, $select);
  if ($result->num_rows > 0) {
//eenmalige start echo
      while ($row = $result->fetch_assoc()) {

          $urlp = 'images/pf/' . $row["user_name"];
          echo '
          <div class="photo-block">
              <div class="photo-title">
              <img class="pp" src="images/pf/' . $row["user_name"] . '.jpeg" alt="profielfoto" width="30" height="30"><span class="photo-title-name"><b>' . $row["user_name"] . '</b></span></div>
      <a href="view_picture.php?id=' . $row["id"] . '"><div class="photo-photo" style="width: 100%; height: 330px; background-image: url(' . $row["image"] . '); background-size:cover; background-color:#efefef;">
       <div class="photohover">Klik voor fullscreen</div>
       </div></a>
          <div class="photo-end">
              <b>' . $row["user_name"] . '</b> ' . $row["title"] . ' <br>
              </div>
          </div>
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
