<?php require_once('spoj.php'); ?>

<link rel="stylesheet" href="baner.css" type = "text/css">

<h1 id="naslov"><b> FORTNITE BALKAN <br><br> </h1>

	<div id="baner">
		<?php
			require 'random_image.php';
			echo "<img src=" . random_image('uploads') . " width='500' height'500' >";
		?>
	</div>
	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>><a href="index.php">Početna</a></li>
        <li <?php if(basename($_SERVER['PHP_SELF']) == 'Onama.php') echo 'class="active"'; ?>><a href="Onama.php">O nama</a></li>
        <li <?php if(basename($_SERVER['PHP_SELF']) == 'Kontakt.php') echo 'class="active"'; ?>><a href="Kontakt.php">Kontakt</a></li>
        <?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])):?>
            <li <?php if(basename($_SERVER['PHP_SELF']) == 'Upload.php') echo 'class="active"'; ?>><a href="Upload.php">Uploadaj sliku</a></li>
        <?php endif; ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])):?>

            <li><a style="color:gray">Prijavljeni ste kao: <?php echo $_SESSION['kor_ime'] ?></a></li>
            <li><a href="odjava.php"><span class="glyphicon glyphicon-log-out"></span> Odjava</a></li>
        <?php else: ?>
            <li><a href="prijava.php"><span class="glyphicon glyphicon-log-in"></span> Prijava</a></li>
            <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Registracija</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
