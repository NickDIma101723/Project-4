<?php

require 'config.php';
require_once 'session.php';

$resultaat = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Controleert of er een ID is meegestuurd
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = $_POST['id'];
        
        try {
           
            $query = "DELETE FROM DigitaleVondsten WHERE id = :id";
            
          
            $stmt = $conn->prepare($query);
            
            
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            // Controleert of het is gelukt
            if ($stmt->rowCount() > 0) {
                $resultaat = "Het item is succesvol verwijderd.";
            } else {
                $resultaat = "Er is iets fout gegaan bij het verwijderen van het item.";
            }
            
        } catch (PDOException $e) {
    
            $resultaat = "Fout bij het verwijderen: " . $e->getMessage();
        }
    } else {
        $resultaat = "Geen geldig ID opgegeven.";
    }
} else {
    $resultaat = "Formulier is niet correct verstuurd.";
}

include 'views/item_verwijderen_verwerk_view.php';
