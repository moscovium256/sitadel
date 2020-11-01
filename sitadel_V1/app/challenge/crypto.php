<!DOCTYPE html>
<html>
<head>
  <title>Crypto</title>
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
  <h2 class="title">Cryptographie</h2>
  <p>La cryptographie est une des disciplines de la cryptologie s'attachant à protéger des messages (assurant confidentialité, authenticité et intégrité) en s'aidant souvent de secrets ou clés.</p>

  <?php
  include 'challenge/main_crypto.php';
  ?>

	<!-- The actual snackbar -->
	<div id="snackbar">Some text some message..</div> 

</div>
</body>
</html>