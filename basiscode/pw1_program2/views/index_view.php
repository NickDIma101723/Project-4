<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Heritage Foundation</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>
<body>
<h1>Future Heritage Foundation</h1>
<h2>Gevonden items</h2>
<p>Welkom <?= htmlspecialchars($_SESSION['username']) ?> <a href="logout.php">Uitloggen</a></p>
<a href="item_toevoegen.php"><button>Nieuw item</button></a>
<table>
    <tr>
        <th>Titel</th>
        <th>Type vondst</th>
        <th>Beschrijving</th>
        <th>Datum vondst</th>
        <th>URL met info</th>
        <th>Acties</th>
    </tr>
    <?php
    if($aantalRijen > 0) {
        foreach($resultaten as $rij) { ?>
            <tr>
                <td><?= htmlspecialchars($rij['titel']) ?></td>
                <td><?= htmlspecialchars($rij['type']) ?></td>
                <td><?= htmlspecialchars($rij['beschrijving']) ?></td>
                <td><?= htmlspecialchars($rij['gevonden_op']) ?></td>
                <td><?= htmlspecialchars($rij['bestand_url']) ?></td>
                <td>
                    <a href="item_aanpassen.php?id=<?= htmlspecialchars($rij['id']) ?>">Aanpassen</a> | 
                    <a href="item_verwijderen.php?id=<?= htmlspecialchars($rij['id']) ?>">Verwijderen</a>
                </td>
            </tr>
            <?php
        }
    } else { ?>
        <tr>
            <td colspan='8'>Geen resultaten gevonden</td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>