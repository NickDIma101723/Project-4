<?php
require 'config.php';
require_once 'session.php';

// Variabelen voor formulier data
$id = "";
$titel = "";
$type = "";
$beschrijving = "";
$datum = "";
$url = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check of alle POST variabelen bestaan
    if (isset($_POST['id'], $_POST['titel'], $_POST['beschrijving'], 
              $_POST['type'], $_POST['datum'], $_POST['url'])){

        // Haal data op en maak schoon
        $id = trim($_POST['id']);
        $titel = trim($_POST['titel']);
        $beschrijving = trim($_POST['beschrijving']);
        $type = trim($_POST['type']);
        $datum = trim($_POST['datum']);
        $url = trim($_POST['url']);
        
        // Controleer of alles is ingevuld
        if (empty($id) || empty($titel) || empty($type) || empty($beschrijving) || 
            empty($datum) || empty($url)) {
            die("Fout: Alle velden zijn verplicht. <a href='item_aanpassen.php?id={$id}'>Ga terug</a>");
        }
    }

    try {
        // Query voor het bijwerken van gegevens
        $query = "UPDATE DigitaleVondsten 
                  SET titel = :titel, type = :type, beschrijving = :beschrijving, 
                      gevonden_op = :datum, bestand_url = :url
                  WHERE id = :id";

        // Bereid de query voor
        $stmt = $conn->prepare($query);

        // Voer de query uit met de schoon gemaakte en gecontroleerde formuliergegevens
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':titel', $titel);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':beschrijving', $beschrijving);
        $stmt->bindParam(':datum', $datum);
        $stmt->bindParam(':url', $url);
        $stmt->execute();

        // Controleer of het is gelukt
        if ($stmt->rowCount() > 0) {
            $resultaat = "Het item '{$titel}' is succesvol aangepast!";
        } else {
            $resultaat = "Er zijn geen wijzigingen doorgevoerd of het item kon niet worden aangepast.";
        }

    } catch (PDOException $e) {
        $resultaat = "Fout bij het bijwerken van het item: " . $e->getMessage();
    }
} else {
    $resultaat = "Ongeldige aanvraagmethode.";
}

include 'views/item_aanpassen_verwerk_view.php';