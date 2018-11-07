<?php
	session_start();
?>
<!doctype html>
<html lang="se">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title>Soloäventyr</title>
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Merriweather+Sans" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!--<nav id="navbar">
	<a class="active" href="index.php">Hem</a>
	<a href="play.php">Spela</a>
	<a href="edit.php">Redigera</a>
</nav>-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a class="active" href="index.php">Hem</a>
	<a href="play.php">Spela</a>
	<a href="edit.php">Redigera</a>
</div>	
<span style="font-size:30px;cursor:pointer;position: absolute;top: 0;right: 25px;font-size: 36px;margin-left: 50px;" onclick="openNav()">&#9776;</span>
<main class="content">
	<section>

		<h1>Soloäventyr - La Traviata</h1>
		<p>Välkommen till sidan om...</p>
<?php
?>
</main>
<script src="js/navbar.js"></script>
</body>
</html>