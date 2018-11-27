<?php
	session_start();
?>
<!doctype html>
<html lang="se">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title>Soloäventyr - Spela</title>
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
    <a class="nav-link active" href="play.php?page=1">Spela</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="edit.php">Redigera</a>
  </li>
</ul>
<div class="h-100 container"><div class=" h-100 row justify-content-md-center">
    <div class="h-auto col-6" style="margin-top: 10vh" >
	<section>
<!--
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit hic aliquid nostrum quibusdam veritatis? Eaque accusantium odit id deserunt, quae minima adipisci nesciunt illum ipsa ea placeat, earum laboriosam corrupti.</p>
		<footer class="gotopagelinks">
			<p>
				<a href="play.php?page=1">Nästa sida</a>
				<a href="play.php?page=2">Gå till sidan</a>
			</p>
		</footer>
-->
<?php
	include_once 'include/dbinfo.php';
	// PDO
	$dbh = new PDO('mysql:host=localhost;dbname=te16;charset=utf8mb4', $dbuser, $dbpass);
	//echo "<pre>" . print_r($dbh,1) . "</pre>";
	if (isset($_GET['page'])) {
		// TODO load requested page from DB using GET
		// prio before session
		// set session to remember
		$filteredPage = filter_input(INPUT_GET, "page", FILTER_VALIDATE_INT);
		$stmt = $dbh->prepare("SELECT * FROM story WHERE id = :id");
		$stmt->bindParam(':id', $filteredPage);
		$stmt->execute();
		$storyrow = $stmt->fetch(PDO::FETCH_ASSOC);

		//echo "<pre>" . print_r($storyrow,1) . "</pre>";
		echo "<fieldset class='mind'>";
		echo '<div class="col-md-auto">
			<blockquote class="blockquote text-center">';
		echo "<legend>YOUR MIND</legend>";
		echo '</blockquote>
				</div>';
		echo "<p class='storyMind'>" . $storyrow['text'] . "</p>";
		echo "</fieldset>";

		$stmt = $dbh->prepare("SELECT * FROM storylinks WHERE storyid = :id");
		$stmt->bindParam(':id', $filteredPage);
		$stmt->execute();
		$row = $stmt->fetchALL(PDO::FETCH_ASSOC);

		/*foreach ($row as $val2) {
			echo "<br><p>" . $val2['text'] . "</p><br>";
		}*/
	} elseif(isset($_SESSION['page'])) {
		// TODO load page from db
		// use for returning player / cookie
	} else {
		echo "<a href='?page=1' class='openBok'>" . "Open Book" . "</a>";
	}
?>
</section>
	<?php 
	if (isset($_GET['page'])) {
	echo '
		<div class="roomDesPos">
			<fieldset class="roomDes">
			<div class="col-md-auto">
			<blockquote class="blockquote text-center">
				<legend>Room + Story</legend>
				</blockquote>
				</div>
				'
				?>
				<?php
				if (isset($_GET['page'])) {
					echo "<p class='roomDesText'>" . $storyrow['plats'] . "</p>"; 
				}
				?>
				<?php echo '
				</fieldset>
				<div class="col-md-auto">
			<blockquote class="blockquote text-center">
				<form action="" method="POST">
					<input class="mainsubmit" type="text" name="input_value" id="input" autocomplete="off" autofocus placeholder="ditt val!" required>
					<input class="btn btn-primary" type="submit" name="submit"  ismap="submit" value="Submit">
				</form></blockquote>
				</div>
		</div> <br><p class="page">page' . $filteredPage . '</p>';


		if (isset($_POST['submit'])) {
			$input = $_POST['input_value'];

		foreach ($row as $val) {
			if ($input == $val['text']) {
				header("location: ?page=" . $val['target']);
			}
		}

		}
	}
	?>

</div>
<script src="js/navbar.js"></script>

</body>
</html>