<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-read-auto</title>
</head>
<body>
<h1>garage read auto</h1>
<p>dit zijn alle gegevens uit de tabel auto van de database garage</p>

<?php
require_once "gar-connect.php";

$sql = $conn->prepare("select autoid, autokenteken, automerk, autotype, autokmstand, klantid from auto");

$sql->execute();

echo "<table>";
foreach ($sql as $rij)
{
    echo "<tr>";
    echo "<td>" . $rij["autoid"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='menu.html'> terug naar het menu </a>";
?>

</body>
</html>