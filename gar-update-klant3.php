<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-update-klant3</title>
</head>
<body>
<h1>garage update klant3</h1>
<p>klantgegevens wijzigen in de tabel klant van de database garage</p>
<?php
// klant gegevens uit het formulier halen
$klantid = $_POST["klantidvak"];
$klantnaam = $_POST["klantnaamvak"];
$klantadres = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats = $_POST["klantplaatsvak"];

//update klantgegevens
require_once "gar-connect.php";

$sql = $conn->prepare(" update klant set klantnaam = :klantnaam, klantadres = :klantadres, klantpostcode = :klantpostcode, klantplaats = :klantplaats where klantid = :klantid");

$sql->execute(
    [
        "klantid" => $klantid,
        "klantnaam" => $klantnaam,
        "klantadres" => $klantadres,
        "klantpostcode" => $klantpostcode,
        "klantplaats" => $klantplaats
    ]);
echo "de klant is gewijzigd. <br>";
echo "<a href='menu.html'> terug naar het menu</a>"
?>
</body>
</html>