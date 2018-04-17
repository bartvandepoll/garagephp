<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-type-auto2</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>garage zoek op autotype 2</h1>
<p>op autotype gegevens zoeken uit de tabel klant van de database garage</p>
<?php
//klantid uit het formulier halen

$autotype = $_POST["autotypevak"];

require_once "gar-connect.php";

$sql = $conn->prepare("SELECT auto.autotype, auto.autoid, klant.klantnaam, klant.klantadres, klant.klantpostcode, klant.klantplaats  FROM klant JOIN auto on klant.klantid = auto.klantid where autotype = :autotype");

$sql->execute(["autotype" => $autotype]);

//klant gegevens laten zien
echo "<table>";
foreach ($sql as $rij)
{
    echo"<tr>";
    echo "<td>" . $rij ["autoid"] . "</td>";
    echo "<td>" . $rij ["autotype"] . "</td>";
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