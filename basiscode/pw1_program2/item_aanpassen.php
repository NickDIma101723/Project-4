<?php

require 'config.php';
require_once 'session.php';

// Haalt het ID van het item uit de url
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id === null) {
    include 'index.php';
    exit;
}

try {

    $query = "SELECT * FROM DigitaleVondsten WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    if ($stmt->rowCount() === 0) {
        include 'index.php';
        exit;
    }

    $item = $stmt->fetch();

    if ($item === false) {
        die("Item niet gevonden. <a href='index.php'>Ga terug naar overzicht</a>");
    }

} catch (PDOException $e) {
    die("Fout bij het ophalen van het item: " . $e->getMessage());
}

include 'views/item_aanpassen_view.php';