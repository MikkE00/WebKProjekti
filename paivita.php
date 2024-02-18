<?php 
include("header.html");

if (
    !isset($_POST["tuote"]) ||
    !isset($_POST["kuvaus"]) ||
    !isset($_POST["hinta"]) ||
    !isset($_POST["ryhma"]) ||
    !isset($_POST["id"])
) {
    header("Location: poista.php");
    exit;
}

$tuote = $_POST["tuote"];
$kuvaus = $_POST["kuvaus"];
$hinta = $_POST["hinta"];
$ryhma = $_POST["ryhma"];
$id = $_POST["id"];

$yhteys = mysqli_connect("127.0.0.1", "admin", "admin", "menu");
if (!$yhteys) {
    die("Yhteyden muodostaminen epäonnistui: " . mysqli_connect_error());
}

$sql = "UPDATE menu SET tuote=?, kuvaus=?, hinta=?, ryhma=? WHERE id=?";
$stmt = mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param($stmt, 'ssssi', $tuote, $kuvaus, $hinta, $ryhma, $id);
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
mysqli_close($yhteys);

header("Location: poista.php");
exit;

include("footer.html");
?>
