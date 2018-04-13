<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-update-auto3</title>
</head>
<body>
<h1>garage update auto3</h1>
<p>autogegevens wijzigen in de tabel auto van de database garage</p>
<?php
// klant gegevens uit het formulier halen
$autoid = $_POST["autoidvak"];
$autokenteken = $_POST["autokenteken"];
$automerk = $_POST["automerk"];
$autotype = $_POST["autotype"];
$autokmstand = $_POST["autokmstand"];
$klantid = $_POST["klantid"];

//update klantgegevens
require_once "gar-connect.php";

$sql = $conn->prepare(" update auto set autokenteken = :autokenteken, automerk = :automerk, autotype = :autotype, autokmstand = :autokmstand, klantid = :klantid where autoid = :autoid");

$sql->execute(
    [
        "autoid" => $autoid,
        "autokenteken" => $autokenteken,
        "automerk" => $automerk,
        "autotype" => $autotype,
        "autokmstand" => $autokmstand,
        "klantid" => $klantid

    ]);
echo "de auto is gewijzigd. <br>";
echo "<a href='menu.html'> terug naar het menu</a>"
?>
</body>
</html>