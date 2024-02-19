<?php
// Aloita istunto, jotta voi käyttää evästeitä
session_start();

// Tarkista, onko käyttäjä kirjautunut sisään; jos ei, ohjaa kirjautumissivulle
if (!isset($_SESSION["user_ok"])){
    $_SESSION["paluuosoite"]="vaatiikirjautumisen.php";
    header("Location:kirjaudu.php");
    exit;
}

print "Tiedosto vaatiikirjautumisen.php"
?>
<p>Kirjautuminen OK!</p>
