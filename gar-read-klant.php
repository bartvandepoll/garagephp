<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-read-klant</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>garage read klant</h1>
<p>dit zijn alle gegevens uit de tabel klant van de database garage</p>

<?php
require_once "gar-connect.php";

$sql = $conn->prepare("select klantid, klantnaam, klantadres, klantpostcode, klantplaats from klant");

$sql->execute();

echo "<table>";
foreach ($sql as $rij)
{
    echo "<tr>";
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["klantadres"] . "</td>";
    echo "<td>" . $rij["klantpostcode"] . "</td>";
    echo "<td>" . $rij["klantplaats"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='menu.html'> terug naar het menu </a>";
?>

</body>
</html>