<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
</head>
<body>

<h1>Inloggen</h1>
<form action="login.php" method="post">

<label for="username">Gebruiker:</label>
<input type="text" name="username" id="username" placeholder="Gebruikersnaam" required="required"><br>
<label for="password">Wachtwoord:</label>
<input type="password" name="password" id="password" placeholder="Wachtwoord" required="required"><br><br>
<input type="submit" name="submit" id="submit" value="Inloggen">
</form>
</body>
</html>
