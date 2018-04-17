<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-klant2.php</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>garage create klant 2</h1>
<p>een klant toevoegen aan de tabel klant in de database garage</p>

<?php
$klantid   = NULL;
$klantnaam = $_POST["klantnaam"];
$klantadres = $_POST["klantadres"];
$klantpostcode = $_POST["klantpostcode"];
$klantplaats = $_POST["klantplaats"];

require_once "gar-connect.php";

$sql = $conn->prepare("insert into klant values (:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats)");

$sql->execute(
    [
        "klantid"               => $klantid,
        "klantnaam"             => $klantnaam,
        "klantadres"            => $klantadres,
        "klantpostcode"         => $klantpostcode,
        "klantplaats"           => $klantplaats
    ]
);
echo "de klant is toegevoegd <br>";
echo "<a href='menu.html'> terug naar het menu </a>"



?>
</body>
</html>