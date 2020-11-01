<?php

?>
<!DOCTYPE html>
<html>
<head>
  <title>Programation</title>
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
  <h2 class="title">Programation</h2>
  <p>Programming, It's up to you to create programs that go faster than you, The prerequisite is to have a knowledge of a programming language like; "python", "php", "C ++", ... Good Luck</p>
  <?php
  include 'challenge/main_programation.php';
  ?>

	<!-- The actual snackbar -->
	<div id="snackbar">Some text some message..</div> 

</div>
</body>
</html>