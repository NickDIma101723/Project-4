<?php

require 'config.php';
require_once 'session.php';

$item = null;

// Controleert of er een ID is meegegeven
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    
    try {
        // Haal het item op uit de database
        $query = "SELECT * FROM DigitaleVondsten WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        $item = $stmt->fetch();
        
        if (!$item) {
            die("Item niet gevonden. <a href='index.php'>Ga terug naar overzicht</a>");
        }
        
    } catch (PDOException $e) {
        die("Fout bij het ophalen van het item: " . $e->getMessage());
    }
} else {
    die("Geen geldig ID opgegeven. <a href='index.php'>Ga terug naar overzicht</a>");
}

include 'views/item_verwijderen_view.php';
