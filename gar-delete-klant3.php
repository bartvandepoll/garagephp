<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-delete-klant3</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>garage delete klant 3</h1>
<p>op klantid gegevens zoeken uit de tabel klant van de database garage zodat ze verwijderd kunnen worden</p>

<?php
//gegevens uit het formulier halen
$klantid = $_POST["klantidvak"];
$verwijderen = $_POST["verwijdervak"];

//klantgegevens verwijderen
if ($verwijderen)
{
    require_once "gar-connect.php";

    $sql = $conn->prepare(" delete from klant where klantid = :klantid");

    $sql->execute(["klantid" => $klantid]);

    echo "de gegevens zijn verwijderd. <br>";
}
else{
    echo "de gegevens zijn niet verwijderd. <br>";
}
echo "<a href='menu.html'>terug naar het menu. </a>";
?>

</body>
</html>