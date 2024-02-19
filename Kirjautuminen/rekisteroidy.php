<?php 
// Otetaan lomakkeelta saadut tiedot ja sijoitetaan ne muuttujiin
if (isset($_POST["tunnus"]) && isset($_POST["salasana"]) && isset($_POST["etunimi"]) && isset($_POST["sukunimi"])){
    $tunnus=$_POST["tunnus"];
    $salasana=$_POST["salasana"];
    $etunimi=$_POST["etunimi"];
    $sukunimi=$_POST["sukunimi"];
}
else {
    // Jos jotkin tiedot puuttuvat, ohjataan takaisin rekisteröitymissivulle
    header("Location:rekisteroityminen.html");
    exit;
}

// Luodaan yhteys tietokantaan
$yhteys = mysqli_connect("127.0.0.1", "root", "password", "burgerbros");
$tietokanta = mysqli_select_db($yhteys, "burgerbros");

// Valmistellaan SQL-lauseke ja suoritetaan lisäys
$sql="INSERT INTO burgerbros (tunnus, salasana, etunimi, sukunimi) VALUES (?, ?, ?, ?)";
$stmt=mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param($stmt, "ssss", $tunnus, md5($salasana), $etunimi, $sukunimi);
mysqli_stmt_execute($stmt);

// Ohjataan kiitos-sivulle (voi ottaa käyttöön myöhemmin)
//header("Location:kiitos.html");
exit;
?>
