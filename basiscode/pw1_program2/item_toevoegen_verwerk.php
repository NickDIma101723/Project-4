<?php

require 'config.php';
require_once 'session.php';


$resultaat = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Haalt data op uit het formulier
    $titel = $_POST['titel'];
    $type = $_POST['type'];
    $beschrijving = $_POST['beschrijving'];
    $datum = $_POST['datum'];
    $url = $_POST['url'];

 // Controleert of alle velden zijn ingevuld
    if (isset($_POST['titel'], $_POST['beschrijving'], $_POST['type'], 
              $_POST['datum'], $_POST['url'])){


        $titel = trim($_POST['titel']);
        $beschrijving = trim($_POST['beschrijving']);
        $type = trim($_POST['type']);
        $datum = trim($_POST['datum']);
        $url = trim($_POST['url']);
        
        // Controleert of alles is ingevuld
        // Kijk of velden leeg zijn
        if (empty($titel) || empty($type) || empty($beschrijving) || 
            empty($datum) || empty($url)) {
            die("Fout: je moet alle velden invullen! <a href='item_toevoegen.php'>Terug</a>");
        }
        
        // Controleert of de url geldig i
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            die("Fout: De URL klopt niet. <a href='item_toevoegen.php'>Terug</a>");
        }

        // Controleert of de datum geldig is
        if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $datum)) {
            die("Fout: Datum moet JJJJ-MM-DD zijn. <a href='item_toevoegen.php'>Terug</a>");
        }

        
              }


    try {
    
        $query = "INSERT INTO DigitaleVondsten (titel, type, beschrijving, gevonden_op, bestand_url)
                  VALUES (:titel, :type, :beschrijving, :datum, :url)";

        $stmt = $conn->prepare($query);

         $stmt->bindParam(':titel', $titel);
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':beschrijving', $beschrijving);
            $stmt->bindParam(':datum', $datum);
            $stmt->bindParam(':url', $url);
      $stmt->execute();

        // Controleert of het is gelukt
        if ($stmt->rowCount()) {
            $resultaat =  "{$titel} is toegevoegd!";
        } else {
            $resultaat =  "Er is iets fout gegaan bij het toevoegen van het item.";
        }

    } catch (PDOException $e) {
        
        $resultaat =  "Fout bij het toevoegen: " . $e->getMessage();
    }
} else {
    $resultaat = "Formulier is niet correct verstuurd.";
}

include 'views/item_toevoegen_verwerk_view.php';