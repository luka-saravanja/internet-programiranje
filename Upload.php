﻿<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <title>FORTNITE BALKAN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="./jquery-3.2.1.js"></script>
  <script src="./skriptica.js"></script>
  <link rel="stylesheet" href="dizajn.css" type = "text/css">
</head>
<body>

<?php require_once('gornjiDio.php'); ?>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    
    </div>
    <div class="col-sm-7 text-center"> 
	<form action="uplodaj.php" method="post" enctype="multipart/form-data">
   Izaberi najbolji Fortnite screenshoot:
   </br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Uploadaj sliku" name="submit">
	</form>
	
     </div>
	 <div class="col-sm-3 sidenav">
	Linkovi na vanjske adrese:
	<p><a href="https://www.epicgames.com/site/en-US/home" target="blank">Sluzbena stranica EPIC Games</a></p>
      <p><a href="https://www.facebook.com/epicgamesinc/" target="blank">Facebook stranica EPIC Games</a></p>

    </div>
</div>
  </div>             



</body>
</html>
<?php ob_end_flush(); ?>