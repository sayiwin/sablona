<?php
require_once('../classes/Kontakt.php');

use sablona\classes\Kontakt;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meno = $_POST['meno'] ?? '';
    $email = $_POST['email'] ?? '';
    $sprava = $_POST['sprava'] ?? '';

    // Overenie údajov
    if (empty($meno) || empty($email) || empty($sprava)) {
        die('Chyba: Všetky polia sú povinné!');
    }

    // Uloženie správy do databázy
    $kontakt = new Kontakt();
    $ulozene = $kontakt->ulozitSpravu($meno, $email, $sprava);

    if ($ulozene) {
        header('Location: ../thankyou.php');
        exit;
    } else {
        die('Chyba pri odosielaní správy do databázy!');
    }
} else {
    die('Neplatný prístup!');
}
