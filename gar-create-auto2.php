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
//$autoid = NULL;
//$autokenteken = $_POST["autokenteken"];
//$automerk = $_POST["automerk"];
//$autotype = $_POST["autotype"];
//$autokmstand = $_POST["autokmstand"];
//$klantid = $_POST["klantid"];
//$image = $_FILES['image']['name'];
//
//
//require_once "gar-connect.php";
//
//$sql = $conn->prepare("insert into auto values (:autoid, :autokenteken, :automerk, :autotype, :autokmstand, :klantid)");
//
//$sql->execute(
//    [
//        "autoid" => $autoid,
//        "autokenteken" => $autokenteken,
//        "automerk" => $automerk,
//        "autotype" => $autotype,
//        "autokmstand" => $autokmstand,
//        "klantid" => $klantid
//    ]
//);
//echo "de auto is toegevoegd <br>";
//echo "<a href='menu.html'> terug naar het menu </a>"
//
//
if (isset($_POST['submit'])) {
    $autoid = NULL;
    $autokenteken = $_POST ["autokenteken"];
    $automerk = $_POST["automerk"];
    $autotype = $_POST["autotype"];
    $autokmstand = $_POST["autokmstand"];
    $klantid = $_POST["klantid"];
    $image = $_FILES['image']['name'];
// auto gegevens invoeren
    require_once "gar-connect.php";
    $sql = $conn->prepare("insert into auto VALUES (:autoid, :autokenteken, :automerk, :autotype, :autokmstand, '$image',  :klantid)");
    $sql->bindParam(":autoid", $autoid);
    $sql->bindParam(":autokenteken", $autokenteken);
    $sql->bindParam(":automerk", $automerk);
    $sql->bindParam(":autotype", $autotype);
    $sql->bindParam(":autokmstand", $autokmstand);
    $sql->bindParam(":klantid", $klantid);
    $sql->execute();
    // Get image name

    // Get text
    //$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "uploads/" . basename($image);

    $sql = "INSERT INTO auto (image) VALUES ('$image')";
    // execute query
    // mysqli_query( $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}
    echo "de auto is toegevoegd <br>";
    echo "<a href='menu.html'> terug naar het menu </a>"

?>

</body>
</html>