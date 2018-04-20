<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-read-auto</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>garage read auto</h1>
<p>dit zijn alle gegevens uit de tabel auto van de database garage</p>

<?php
require_once "gar-connect.php";

$sql = $conn->prepare("select autoid, autokenteken, automerk, autotype, autokmstand, image, klantid from auto");

$sql->execute();



echo "<table>";
echo "<thead>";
echo "<th>autoid</th>";
echo "<th>kenteken</th>";
echo "<th>merk</th>";
echo "<th>type</th>";
echo "<th>km stand</th>";
echo "<th>image</th>";
echo "<th>klant id</th>";
echo "</thead>";
foreach ($sql as $rij) {
    echo "<tr>";
    echo "<td>" . $rij["autoid"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "<td>" . $rij["image"] . "</td>";
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='menu.html'> terug naar het menu </a>";
?>

</body>
</html>