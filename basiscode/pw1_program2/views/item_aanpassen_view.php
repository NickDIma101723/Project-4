<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Item aanpassen - Future Heritage Foundation</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>
<body>
<h1>Future Heritage Foundation</h1>
<h2>Item aanpassen</h2>

<form action="item_aanpassen_verwerk.php" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>">
    
    <label for="titel">Titel:</label>
    <input type="text" id="titel" name="titel" value="<?= htmlspecialchars($item['titel']) ?>" required>
    <br><br>
    
    <label for="type">Type vondst:</label>
    <input type="text" id="type" name="type" value="<?= htmlspecialchars($item['type']) ?>" required>
    <br><br>
    
    <label for="beschrijving">Beschrijving:</label>
    <textarea id="beschrijving" name="beschrijving" required><?= htmlspecialchars($item['beschrijving']) ?></textarea>
    <br><br>
    
    <label for="datum">Datum vondst:</label>
    <input type="date" id="datum" name="datum" value="<?= htmlspecialchars($item['gevonden_op']) ?>" required>
    <br><br>
    
    <label for="url">URL met info:</label>
    <input type="url" id="url" name="url" value="<?= htmlspecialchars($item['bestand_url']) ?>" required>
    <br><br>
    
    <button type="submit">Item aanpassen</button>
    <a href="index.php"><button type="button">Annuleren</button></a>
</form>

</body>
</html>