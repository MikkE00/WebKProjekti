<?php 
if (isset($_POST["tunnus"]) && (isset($_POST["salasana"]) && 
(isset($_POST["etunimi"]) && (isset($_POST["sukunimi"]))))){
    $tunnus=$_POST["tunnus"];
    $tunnus=$_POST["salasana"];
    $tunnus=$_POST["etunimi"];
    $tunnus=$_POST["sukunimi"];
}
else {
    header("Location:rekisteroityminen.html");
    exit;
}

$yhteys = mysqli_connect("127.0.0.1", "root", "password", "burgerbros");
$tietokanta = mysqli_select_db($yhteys, "burgerbros");
$sql="insert into burgerbros values(?, ?, ?, ?";
$stmt=mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param($stmt, "ssss", $tunnus, md5($salasana), $etunimi, $sukunimi);
mysqli_stmt_execute($stmt);

//voi lisätä kiitos rekisteröinnistä sivun
//header("Location:kiitos.html");
exit;

?>