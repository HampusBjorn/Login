<?php
session_start();
session_destroy();
$_SESSION = array();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<title>Soon there!</title>
	<style type="text/css">
		body {
			background-image: url(back7.png);
			
		}

		.main-pos {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 60%;
			height: 60%;
			background: #fff;
			 box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.4), 0 4px 10px 0 rgba(0, 0, 0, 0.2);
		}

		main{
			width: 80%;
			margin: 0px auto;
			font-family: 'Merriweather', serif;
		}

		h1{
			position: absolute;
			right: 4vw;
			top: 25%;
			transform: translate(0,-50%);
			font-size: 2.1vw;
			}

		p{
			text-align: center;
		}

		.text-field-pos {
			position: absolute;
			right: 3vw;
			top: 50%;
			transform: translate(0,-50%);
		}

		.text-field {
			border: none;
			background: #d1d1d1;
			font-size: 1vw;
			height: 3vw;
			width: 14vw;
			border-radius: 3vw;
			text-align: center;
		}

		.submit {
			border: none;
			background: #40e0d0;
			font-size: 1.2vw;
			height: 3vw;
			width: 14vw;
			border-radius: 3vw;
			color: #000;
			text-align: center;
		}

		.login-pos {
			position: absolute;
			right: 3vw;
			top: 70%;
			transform: translate(0,-50%;);
		}

		.benne {
			position: absolute;
			width: 20vw;
			bottom: 0;
			left: 35%;
			transform: translate(-50%,0);
		}

		.usercreate {
			position: absolute;
			top: 90%;
			transform: translate(0,-50%;);
			right: 5vw;
			font-size: 1vw;
		}

	</style>
</head>
<body>
	<div class="main-pos">
	<main>
		<img src="Banjo Kastanjo.svg" class="benne">
		<h1>Välkommen</h1>
		<form action="login.php" method="POST">
			<div class="text-field-pos">
				<p>
					<input class="text-field" type="text" name="username" id="username" placeholder="Username">
				</p>
				<p>
					<input class="text-field" type="password" name="password" id="password" placeholder="Password">
				</p>
			</div>
				<p class="login-pos">
					<input class="submit" type="submit" name="submit" ismap="submit" value="Logga in">
				</p>
		</form>
		<a class="usercreate" href="createuser.php">Skapa användare...</a>
	</main>
	</div>
</body>
</html>