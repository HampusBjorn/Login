<!DOCTYPE html>
<html>
<head>
	<title>create</title>
	<style type="text/css">
	main{
			width: 80%;
			margin: 0px auto;
		}
</style>
</head>
<body>
<main>
	<form action="create.php" method="POST">
		<fieldset>
			<legend>Skapa Användare</legend>
			<p>
				<label for="newUser" >Användarnamn:</label>
				<input type="text" name="username" id="username">
			</p>
			<p>
				<label for="newPass">Lösenord:</label>
				<input type="password" name="password" id="password">
			</p>
			<p>
				<label for="newEmail">Email:</label>
				<input type="text" name="email" id="email">
			</p>
			<p>
				<input type="submit" name="create" id="create" value="Skapa">
			</p>
		</fieldset>
	</form>
</main>
</body>
</html>