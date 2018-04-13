<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-delete-auto2</title>
</head>
<body>
<h1>garage delete auto2</h1>
<p>op autoid gegevens zoeken uit de tabel auto van de database garage zodat ze verwijderd kunnen worden</p>

<?php
//klant id uit het formulier halen

$autoid = $_POST["autoidvak"];

require_once "gar-connect.php";

$autos = $conn->prepare("select autoid, autokenteken, automerk, autotype, autokmstand, klantid from auto where autoid = :autoid");

$autos->execute(["autoid" => $autoid]);

//klant gegevens laaten zien in een nieuw formulier
echo "<table>";
foreach ($autos as $auto) {
    echo "<tr>";
    echo "<td>" . $auto["autoid"] . "</td>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>" . $auto["autokmstand"] . "</td>";
    echo "<td>" . $auto["klantid"] . "</td>";
    echo "</tr>";
}
echo "</table><br>";

echo "<form action='gar-delete-auto3.php' method='post'>";
//klant id mag niet meer worden gewijzigd
echo "<input type='hidden' name='autoidvak' value=$autoid>";
//waarde 0 doorgeven als er niet gecheckt wordt
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "verwijder deze auto. <br>";
echo "<input type='submit'>";
echo "</form>";


?>
</body>
</html>