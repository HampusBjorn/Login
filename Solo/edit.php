<?php
	session_start();
?>
<!doctype html>
<html lang="se">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title>Soloäventyr - Redigera</title>
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Merriweather+Sans" rel="stylesheet"> 
</head>
<body style="height: 100vh; overflow: hidden;">
		<a class="navbar-brand" href="index.php" style="position: absolute; left: 0; top: 1vh;">
    <img src="Lifeless2.svg" width="120" height="40" alt="">
  </a>
<ul class="nav nav-pills justify-content-center" style="margin-top: 1vh;">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Hem</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="play.php?page=1">Spela</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="edit.php">Redigera</a>
  </li>
</ul>
<div class="h-100 container"><div class=" h-100 row justify-content-md-center">
    <div class="h-auto col-8" style="margin-top: 10vh">
	<section>
		<div class="col-md-auto">
			<blockquote class="blockquote text-center">
		<h1>Redigera</h1>

<?php

	include_once 'include/dbinfo.php';
	// PDO
	$dbh = new PDO('mysql:host=localhost;dbname=te16;charset=utf8mb4', $dbuser, $dbpass);

	if (!isset($_SESSION['id'])) {
				echo '<form action="" method="POST">
			<div class="text-field-pos">
				<p>
					<input class="text-field" type="text" name="username" id="username" placeholder="Username">
				</p>
				<p>
					<input class="text-field" type="password" name="password" id="password" placeholder="Password">
				</p>
			</div>
				<p class="login-pos">
					<input class="btn btn-primary" type="submit" name="login" ismap="login" value="Logga in">
				</p>
		</form>';
	
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$filteredUsername = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
		$password = $_POST['password'];
		$statement = $dbh->prepare("SELECT * FROM login WHERE login . username = :username");
		$statement->bindParam(':username', $filteredUsername);
		$statement->execute();
		$row = $statement->fetch(PDO::FETCH_ASSOC);
		//echo "<pre>" . print_r($row,1) . "</pre>";
		// username behöver inte kontrolleras, ni har redan gjort det i WHERE SQL
	
		if(password_verify($password, $row['password']))
		{
			$_SESSION['id'] = $row['id'];
			header("location: edit.php");
		}
	}

	}

	if (isset($_SESSION['id'])) {

		echo '<form method="POST">
			<input class="btn btn-primary" type="submit" name="logout" id="logout" value="logga ut">
			</form>';

			if (isset($_POST['logout'])) {
				session_destroy();
				header("location: edit.php");
			}
		if (!isset($_POST['add'])) {
			echo '<form method="POST">
			<br><input type="text" name="page" id="page" placeholder="Page?" autocomplete="off" autofocus>
			<input class="btn btn-primary" type="submit" name="submit" id="submit">
		</form>';
		}
		

	if (isset($_POST['submit']) || isset($_POST['add'])) {

			$filteredPage = filter_input(INPUT_POST, "page", FILTER_VALIDATE_INT);
		$stmt = $dbh->prepare("SELECT * FROM story WHERE id = :id");
		$stmt->bindParam(':id', $filteredPage);
		$stmt->execute();
		$storyrow = $stmt->fetch(PDO::FETCH_ASSOC);
		

		if ($filteredPage == $storyrow['id']) {
		
		echo '<form method="POST">
		<textarea type="text" name="text" id="text" rows="10" cols="30">' . $storyrow['text'] . '</textarea>
		<textarea type="text" name="plats" id="plats" rows="10" cols="30">' . $storyrow['plats'] . '</textarea>
		  <input type="hidden" name="page" id="page" value=' . $filteredPage . '> <br>';

		echo '<input class="btn btn-primary" type="submit" name="update" id="update" value="Uppdatera">
		<input class="btn btn-primary" type="submit" name="delete" id="delete" value="Radera" onclick=\'return confirm("This is not recommended! Are you sure?")\'>
		</form> <br>
		<p> Ändra inte det som står inanför b taggarna </p>';

	}

	elseif ($filteredPage != $storyrow['id']) {
		if (!isset($_POST['add'])) {
		 	echo'<form method="POST">
		<input type="hidden" name="page" id="page" value=' . $_POST["page"] . '><br>
		<input class="btn btn-primary" type="submit" name="add" id="add" value="lägg till">
		</form>';
		 } 
	}

		if (isset($_POST['add'])) {
			echo '<form method="POST"><textarea type="text" name="text" id="text" rows="10" cols="30"></textarea>
		<textarea type="text" name="plats" id="plats" rows="10" cols="30"></textarea>
		<input class="btn btn-primary" type="submit" name="confirm" id="confirm" value="bekräfta"></form>';
		}




	}

	if (isset($_POST['confirm'])) {
		$filteredText = filter_input(INPUT_POST, "text", FILTER_SANITIZE_SPECIAL_CHARS);
		$filteredPlace = filter_input(INPUT_POST, "plats", FILTER_SANITIZE_SPECIAL_CHARS);
		$stmt = $dbh->prepare("INSERT INTO story (text, plats) VALUES (:text, :plats)");
		$stmt->bindParam(':text', $filteredText);
		$stmt->bindParam(':plats', $filteredPlace);
		$stmt->execute();
		echo "<pre>" . print_r($_POST,1) . "</pre>";
}

if(isset($_POST['update'])){
            $filteredPage = filter_input(INPUT_POST, "page", FILTER_VALIDATE_INT);
            $textupdate = $_POST['text'];
            $platsupdate = $_POST['plats'];
            echo "<pre>" . print_r($_POST,1) . "</pre>";
            $stmt = $dbh->prepare("UPDATE story SET text=:textfield, plats = :platsfield WHERE id = :id");
            $stmt->bindparam(':id', $filteredPage);
            $stmt->bindparam(':textfield', $textupdate);
            $stmt->bindparam(':platsfield', $platsupdate);
            $stmt->execute();
        }

        if(isset($_POST['delete'])){
        	$filteredPage = filter_input(INPUT_POST, "page", FILTER_VALIDATE_INT);
          $statement = $dbh->prepare("DELETE FROM story WHERE id = :id");
		echo "<pre>" . print_r($_POST,1) . "</pre>";
		$statement->bindParam(':id', $filteredPage);
		$statement->execute();
        }
}
// TODO protect with your login
// add, edit, delete pages & events
// skriv ut en lista över sidor
?>
</blockquote>
</div>
</section>
</div>
</div>
</div>
<script src="js/navbar.js"></script>
</body>
</html>