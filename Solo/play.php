<?php
	session_start();
?>
<!doctype html>
<html lang="se">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title>Soloäventyr - Spela</title>
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Merriweather+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/add.css">
</head>
<body>
<!--<nav id="navbar">
	<a href="index.php">Hem</a>
	<a class="active" href="play.php">Spela</a>
	<a href="edit.php">Redigera</a>
</nav>
-->
<main class="content">
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
		echo "<p>" . $storyrow['text'] . "</p>";

		$stmt = $dbh->prepare("SELECT * FROM storylinks WHERE storyid = :id");
		$stmt->bindParam(':id', $filteredPage);
		$stmt->execute();
		$row = $stmt->fetchALL(PDO::FETCH_ASSOC);

		/*foreach ($row as $val2) {
			echo "<br><p>" . $val2['text'] . "</p><br>";
		}*/

		echo "<br><p>page " . $filteredPage . "</p>";

		echo "<a class='closeBok' href='/Webserver/Hemlig/Solo/play.php'>" . 'Close Book' . "</a>";
	} elseif(isset($_SESSION['page'])) {
		// TODO load page from db
		// use for returning player / cookie
	} else {
		echo "<a href='?page=1' class='openBok'>" . 'Open Book 1' . "</a>";
	}
?>
</section>
	<?php 
	if (isset($_GET['page'])) {
	echo '
		<div class="roomDesPos">
			<fieldset class="roomDes">
				<legend>Room</legend>
				'
				?>
				<?php
				if (isset($_GET['page'])) {
					echo "<p class='roomDesText'>" . $storyrow['plats'] . "</p>"; 
				}
				?>
				<?php echo '
				</fieldset>
				<form action="" method="POST">
					<input type="text" name="input_value" id="input" autocomplete="off" autofocus>
					<input class="submit" type="submit" name="submit" ismap="submit" value="Submit">
				</form>
		</div>
		';


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
</main>
<script src="js/navbar.js"></script>

</body>
</html>