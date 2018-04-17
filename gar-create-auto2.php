<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>garage auto klant 2</h1>
<p>een auto toevoegen aan de tabel auto in de database garage</p>

<?php
$autoid = NULL;
$autokenteken = $_POST["autokenteken"];
$automerk = $_POST["automerk"];
$autotype = $_POST["autotype"];
$autokmstand = $_POST["autokmstand"];
$klantid = $_POST["klantid"];

require_once "gar-connect.php";

$sql = $conn->prepare("insert into auto values (:autoid, :autokenteken, :automerk, :autotype, :autokmstand, :klantid)");

$sql->execute(
    [
        "autoid" => $autoid,
        "autokenteken" => $autokenteken,
        "automerk" => $automerk,
        "autotype" => $autotype,
        "autokmstand" => $autokmstand,
        "klantid" => $klantid
    ]
);
echo "de auto is toegevoegd <br>";
echo "<a href='menu.html'> terug naar het menu </a>"


?>
</body>
</html>