<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-zoek-klant2</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>garage zoek op klantid 2</h1>
<p>op klantid gegevens zoeken uit de tabel klanten van de database garage</p>
<?php
//klantid uit het formulier halen

$klantid = $_POST["klantidvak"];

require_once "gar-connect.php";

$sql = $conn->prepare("select klantid, klantnaam, klantadres, klantpostcode, klantplaats from klant where klantid = :klantid");

$sql->execute(["klantid" => $klantid]);

//klant gegevens laten zien
echo "<table>";
echo "<thead>";
echo "<th>klant id</th>";
echo "<th>naam</th>";
echo "<th>adres</th>";
echo "<th>postcode</th>";
echo "<th>plaats</th>";
echo "</thead>";
foreach ($sql as $rij)
{
    echo"<tr>";
    echo "<td>" . $rij ["klantid"] . "</td>";
    echo "<td>" . $rij ["klantnaam"] . "</td>";
    echo "<td>" . $rij ["klantadres"] . "</td>";
    echo "<td>" . $rij ["klantpostcode"] . "</td>";
    echo "<td>" . $rij ["klantplaats"] . "</td>";
    echo "</tr>";
}
echo "</table><br>";
echo "<a href='menu.html'> terug naar het menu </a>"


?>
</body>
</html>