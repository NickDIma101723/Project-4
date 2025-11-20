<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Item verwijderen - Future Heritage Foundation</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>
<body>
<h1>Future Heritage Foundation</h1>
<h2>Item verwijderen</h2>

<p><strong>Weet je zeker dat je het volgende item wilt verwijderen?</strong></p>

<table>
    <tr>
        <th>Titel</th>
        <td><?= htmlspecialchars($item['titel']) ?></td>
    </tr>
    <tr>
        <th>Type vondst</th>
        <td><?= htmlspecialchars($item['type']) ?></td>
    </tr>
    <tr>
        <th>Beschrijving</th>
        <td><?= htmlspecialchars($item['beschrijving']) ?></td>
    </tr>
    <tr>
        <th>Datum vondst</th>
        <td><?= htmlspecialchars($item['gevonden_op']) ?></td>
    </tr>
    <tr>
        <th>URL met info</th>
        <td><?= htmlspecialchars($item['bestand_url']) ?></td>
    </tr>
</table>

<form action="item_verwijderen_verwerk.php" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>">
    <button type="submit" style="background-color: #d9534f;">Ja verwijder dit item</button>
    <a href="index.php"><button type="button">Nee ga terug</button></a>
</form>

</body>
</html>
