<?php
include "header.html";
?>

<?php

if (isset($_GET["poistettava"])){
    $poistettava=$_GET["poistettava"];
}

$yhteys = mysqli_connect("127.0.0.1", "root", "password", "burgerbros");

// Check connection
if (!$yhteys) {
    die("Yhteyden muodostaminen epäonnistui: " . mysqli_connect_error());
}
echo "Yhteys OK."; // debuggia

$tietokanta = mysqli_select_db($yhteys, "burgerbros");
if (!$tietokanta) {
    die("Tietokannan valinta epäonnistui: " . mysqli_connect_error());
}
echo "Tietokanta OK."; // debuggia

// Poistetaan tietokannasta "poistettava"
if (isset($poistettava)){
    $sql = "DELETE FROM menu WHERE id=?";
    $stmt = mysqli_prepare($yhteys, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $poistettava);
    mysqli_stmt_execute($stmt);
}

// Haetaan tietokannasta kaikki rivit
$tulos = mysqli_query($yhteys, "SELECT * FROM menu");

print "<ol>";
while ($rivi = mysqli_fetch_object($tulos)){
    print "<li>id=$rivi->id tuote=$rivi->tuote kuvaus=$rivi->kuvaus hinta=$rivi->hinta ryhma=$rivi->ryhma  <a href='poista.php?poistettava=".$rivi->id."'>Poista</a> <a href='muokkaa.php?muokattava=".$rivi->id."'>Muokkaa</a><br>";
}
print "</ol>";
mysqli_close($yhteys); 

?>

<?php
include "footer.html";
?>
