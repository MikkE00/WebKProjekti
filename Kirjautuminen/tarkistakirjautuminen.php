<?php
// Aloita istunto, jotta voidaan käyttää evästeitä eli tallentaa kirjautuminen
session_start();

// Otetaan lomakkeelta saadut tiedot ja sijoitetaan ne muuttujiin
if (isset($_POST["tunnus"]) && isset($_POST["salasana"])){
    $tunnus=$_POST["tunnus"];
    $salasana=$_POST["salasana"];
}
else{
    // Jos tunnus tai salasana puuttuu, ohjataan takaisin kirjautumissivulle
    header("Location:rekisteroityminen.html");
    exit;
}

// Luodaan yhteys tietokantaan
$yhteys = mysqli_connect("127.0.0.1", "root", "password", "burgerbros");
$tietokanta = mysqli_select_db($yhteys, "burgerbros");

// Valmistellaan SQL-lauseke ja suoritetaan kysely
$sql="SELECT * FROM burgerbros WHERE tunnus=? AND salasana=md5(?)";
$stmt=mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param($stmt, "ss", $tunnus, $salasana);
mysqli_execute($stmt);
$tulos=mysqli_stmt_get_result($stmt);

// Jos käyttäjä löytyy tietokannasta, luodaan istunto ja ohjataan käyttäjä takaisin alkuperäiselle sivulle
if ($rivi=mysqli_fetch_object ($tulos)){
    $_SESSION["user_ok"]="ok";
    header("Location:".$_SESSION["paluuosoite"]);
    exit;
}
else{
    header("Location:kirjaudu.php");
    exit;
}
?>
