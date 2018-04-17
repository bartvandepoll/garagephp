<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-delete-auto3</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>garage delete auto 3</h1>
<p>op autoid gegevens zoeken uit de tabel auto van de database garage zodat ze verwijderd kunnen worden</p>

<?php
//gegevens uit het formulier halen
$autoid = $_POST["autoidvak"];
$verwijderen = $_POST["verwijdervak"];

//klantgegevens verwijderen
if ($verwijderen)
{
    require_once "gar-connect.php";

    $sql = $conn->prepare(" delete from auto where autoid = :autoid");

    $sql->execute(["autoid" => $autoid]);

    echo "de gegevens zijn verwijderd. <br>";
}
else{
    echo "de gegevens zijn niet verwijderd. <br>";
}
echo "<a href='menu.html'>terug naar het menu. </a>";
?>

</body>
</html>