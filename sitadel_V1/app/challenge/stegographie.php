
<!DOCTYPE html>
<html>
<head>
  <title>Stegographie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="include/style.css">
    <script src="../js/app.js"></script>
    <script src="../js/md5.js"></script>
</head>
<body>

<?php
include "include/leftBar.php";
?>
<div class="main">
  <h2 class="title">Stegographie</h2>
  <p>en a tous jouer au jeux de devinet, a vous de deviner ou ladverser peux cacher cest message ! bien venu dans l'art de la dissimulation .<p>

  <?php
  include 'challenge/main_stegographie.php';
  ?>

</div>
</body>
</html>