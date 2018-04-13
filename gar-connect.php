<?php
// maakt een connectie met database 'garage'
// door bart van de poll

$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=localhost;dbname=garage", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "connectie gelukt";
} catch (PDOException $e){
    echo "connectie mislukt: " . $e ->getMessage();
}
?>

