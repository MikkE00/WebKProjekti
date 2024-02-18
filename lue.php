<?php
include "header.html";
?>

<?php
// $yhteys = mysqli_connect("127.0.0.1", "pena", "kukkuu", "hamklomakeesimerkki");
$yhteys = mysqli_connect("127.0.0.1", "root", "password");

// Check connection
if (!$yhteys) {
die("Yhteyden muodostaminen epäonnistui: " . mysqli_connect_error());
    }
    echo "Yhteys OK."; // debuggia

    $tietokanta=mysqli_select_db($yhteys, "menu");
if (!$tietokanta) {
die("Tietokannan valinta epäonnistui: " . mysqli_connect_error());
    }
    echo "Tietokanta OK."; // debuggia

$tulos=mysqli_query($yhteys, "select * from menu");

print "<ol>"
while ($rivi=mysqli_fetch_object($tulos)){
    print "<li>id=$rivi->id tuote=$rivi->tuote kuvaus=$rivi->kuvaus ryhma=$rivi->ryhma hinta=$rivi->hinta<br>";
}
print "/<ol>";
mysqli_close($yhteys); 

?>

<?php
include "footer.html";
?>