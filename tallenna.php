<?php 
include ("header.html");
?>


<?php
if (isset($_POST["tuote"])){
    $tuote=$_POST["tuote"];
    }
else {
    header("Location:menuLomake.html");
    exit;
    }  

if (isset($_POST["kuvaus"])){
    $kuvaus=$_POST["kuvaus"];
    }   
else {
    $kuvaus="";
    }

if (isset($_POST["hinta"])){
    $hinta=$_POST["hinta"];
    }
else {
    $hinta="";
    }

if (isset($_POST["group"])){
    $group=$_POST["group"];
    }
else {
    $group="";
    }

// $yhteys = mysqli_connect("127.0.0.1", "pena", "kukkuu", "hamklomakeesimerkki");
    $yhteys = mysqli_connect("127.0.0.1", "admin", "admin");

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

$sql="insert into menu(tuote, kuvaus, hinta, group) values(?, ?, ?, ?)";
$stmt=mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param($stmt, 'ssis', $tuote, $kuvaus, $hinta, $group);
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
mysqli_close($yhteys); 	
header("Location:menuLomake.html");
exit;

?>

<?php
include ("footer.html");
?>


<!--BRB-->