<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-update-auto2</title>
</head>
<body>
<h1>garage update auto2</h1>
<p>dit formulier wordt gebruikt om autogegevens te weizigen in de tabel auto van de database garage</p>

<?php
//klant id uit het formulier halen

$autoid = $_POST["autoidvak"];

require_once "gar-connect.php";

$autos = $conn->prepare("select autoid, autokenteken, automerk, autotype, autokmstand, klantid from auto where autoid = :autoid");

$autos->execute(["autoid" => $autoid]);

//klantgegevens in een nieuw formulier laten zien

echo "<form action= 'gar-update-auto3.php' method='post'>";
foreach ($autos as $auto) {
//klantid mag niet worden gewijzigd worden
    echo "autoid:" . $auto["autoid"];
    echo "<input type='hidden' name='autoidvak' ";
    echo "value=' " . $auto["autoid"] . " '> <br> ";

    echo "autokenteken: <input type='text' ";
    echo "name = 'autokenteken' ";
    echo "value = '" .$auto["autokenteken"]. "' ";
    echo "> <br>";

    echo "automerk: <input type='text' ";
    echo "name = 'automerk' ";
    echo "value = '" .$auto["automerk"]. "' ";
    echo "> <br>";

    echo "autotype: <input type='text' ";
    echo "name = 'autotype' ";
    echo "value = '" .$auto["autotype"]. "' ";
    echo "> <br>";

    echo "autokmstand: <input type='text' ";
    echo "name = 'autokmstand' ";
    echo "value = '" .$auto["autokmstand"]. "' ";
    echo "> <br>";

    echo "klantid: <input type='text' ";
    echo "name = 'klantid' ";
    echo "value = '" .$auto["klantid"]. "' ";
    echo "> <br>";
}

echo "<input type='submit'>";
echo "</form>";

?>

</body>
</html>