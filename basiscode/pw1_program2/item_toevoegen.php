<?php
require 'config.php';
require_once 'session.php';

/* Aangezien we voor het afbeelden van het invoer formulier geen verdere acties nodig hebben,
kunnen we direct de view includen.

Normaal zou je hier code plaatsten om bijvoorbeeld user data te controleren
om te zien of een gebruiker wel is ingelogd en de juiste rechten heeft.*/

include 'views/item_toevoegen_view.php';