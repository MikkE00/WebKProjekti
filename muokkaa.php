<?php
include("header.html");
?>
<?php
if (isset($_GET["muokattava"])) {
    $muokattava = $_GET["muokattava"];
} else {
    header("Location: poista.php");
    exit;
}

// Tarkistetaan tietokantayhteys
$yhteys = mysqli_connect("127.0.0.1", "root", "password", "burgerbros");
if (!$yhteys) {
    die("Yhteyden muodostaminen epäonnistui: " . mysqli_connect_error());
}
echo "Yhteys OK."; // debuggia

$tietokanta = mysqli_select_db($yhteys, "menu");
if (!$tietokanta) {
    die("Tietokannan valinta epäonnistui: " . mysqli_error($yhteys));
}

$sql = "SELECT * FROM menu WHERE id=?";
$stmt = mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param($stmt, 'i', $muokattava);
mysqli_stmt_execute($stmt);
$tulos = mysqli_stmt_get_result($stmt);

if ($rivi = mysqli_fetch_object($tulos)) {
    ?>
    <h2>Lisaa menuun tuote</h2>
    <form action="paivita.php" method="post">

        Tuotteen nimi:<input type="hidden" name="id" value='<?php echo $rivi->id; ?>'><br>
        Tuotteen nimi:<input type="text" name="tuote" value='<?php echo $rivi->tuote; ?>'><br>
        Tuotteen kuvaus:<input type="text" name="kuvaus" value='<?php echo $rivi->kuvaus; ?>'><br>
        Tuotteen hinta:<input type="text" name="hinta" value='<?php echo $rivi->hinta; ?>'><br>
        <input type='radio' name='ryhma' value='Hamburgers'>Hamburgers<br>
        <input type='radio' name='ryhma' value='Sides'>Sides<br>
        <input type='radio' name='ryhma' value='Drinks'>Drinks<br>

        <input type='submit' name="ok" value="OK"><br>

    </form>
    <?php
}

include("footer.html");
?>
