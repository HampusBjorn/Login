<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>You are there</title>
</head>
<body>
<?php  
session_start();

if (isset($_POST['submit'])) {

	include 'db.php';

	if (isset($_POST['username']) && isset($_POST['password'])) {

		$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
		$password = $_POST['password'];

		$statement = $dbh->query("SELECT * FROM login");
		$row = $statement->fetch(PDO::FETCH_ASSOC);

		if ($username == $row['username'] && password_verify($password, $row['password'])) {
			echo "<h1>Välkommen till alla hemliga saker</h1>";
		}
		else {
			echo "<h1>FEL!</h1>";
		}
	}
}

else {
	echo "<h1>Dumma jävel</h1>";
}

?>
</body>
</html>