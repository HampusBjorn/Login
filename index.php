<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soon there!</title>
	<style type="text/css">
		main{
			width: 80%;
			margin: 0px auto;
		}
	</style>
</head>
<body>
	<main>
		<h1>Välkommen</h1>
		<form action="login.php" method="POST">
			<fieldset>
				<legend>Logga In</legend>
				<p>
					<label for="username">Användarnamn: </label>
					<input type="text" name="username" id="username">
				</p>
				<p>
					<label for="password">Lösenord: </label>
					<input type="password" name="password" id="password">
				</p>
				<p>
					<input type="submit" name="submit" ismap="submit" value="Logga in">
				</p>
			</fieldset>
		</form>
	</main>
</body>
</html>