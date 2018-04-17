<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-join-auto</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>garage join auto</h1>
<p>dit zijn alle gegevens uit de tabel auto en klant van de database garage</p>

<?php
require_once "gar-connect.php";

$sql = $conn->prepare("SELECT klant.klantnaam, auto.autokenteken, auto.automerk, auto.autotype, auto.autokmstand, auto.autoid FROM klant JOIN auto on klant.klantid = auto.klantid ");

$sql->execute();

echo "<table>";
foreach ($sql as $rij)
{
    echo "<tr>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "<td>" . $rij["autoid"] . "</td>";

    echo "</tr>";
}
echo "</table>";
echo "<a href='menu.html'> terug naar het menu </a>";
?>

</body>
</html>