<?php

session_start();

// Als de user al ingelog is dan wordt hij doorgestuurd naar de index pagina
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: index.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inloggen Future Heritage Foundation</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>
<body>
<h1>Future Heritage Foundation</h1>
<h2>Inloggen</h2>

<form action="login_verwerk.php" method="POST">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" id="username" name="username" required>
    <br><br>
    
    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" required>
    <br><br>
    
    <button type="submit">Inloggen</button>
</form>

</body>
</html>