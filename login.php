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

	$loginCredentials = [
		"username" => "Hampus.bjorn",
		"password" => "secure"
	];

	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$hash = $password;

			if ($username == $loginCredentials['username'] && $password == password_verify($loginCredentials['password'], $hash)) {
				echo "<h1>Välkommen till alla hemliga saker</h1>";
			}

			elseif ($username != $loginCredentials['username'] || $password != password_verify($loginCredentials['password'], $hash)) {
				echo "<h1>Användarnamn eller lösenord är fel</h1>";
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