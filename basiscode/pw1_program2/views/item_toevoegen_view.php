<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>Item Toevoegen</title>
</head>
<body>
<h1>Nieuwe vondst toevoegen</h1>

<form action="item_toevoegen_verwerk.php" method="POST">

    <label for="titel">Titel:</label>
    <input type="text" id="titel"  name="titel"/>
    <br/><br/>

    <label for="type">Type:</label>
    <input type="text" id="type"  name="type"/>
    <br/><br/>

    <label for="beschrijving">Beschrijving:</label>
    <textarea id="beschrijving" name="beschrijving"></textarea>
    <br/><br/>

    <label for="datum">Gevonden op:</label>
    <input type="date" id="datum" name="datum" value="<?=date('Y-m-d')?>"/>
    <br><br>

    <label for="url">URL:</label>
    <input type="text" id="url" name="url">
    <br><br>

    <button type="submit">Toevoegen</button>

</form>
</body>
</html>
