<?php
//Controleert of er een actieve sessie is en vernietigt deze
session_start();

session_unset();

session_destroy();
header("Location: login.php");

exit();
