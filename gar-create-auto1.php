<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-auto1.php</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>garage create auto 1</h1>
<p>dit formulier wordt gebruikt om auto gegevens in te voeren.</p>
<form action="gar-create-auto2.php" method="post" enctype="multipart/form-data">
    <label for="autokenteken"> autokenteken : </label>
    <input id="autokenteken" name="autokenteken" type="text">
    <br>
    <label for="automerk"> automerk : </label>
    <input id="automerk" name="automerk" type="text">
    <br>
    <label for="autotype"> autotype : </label>
    <input id="autotype" name="autotype" type="text">
    <br>
    <label for="autokmstand"> km stand : </label>
    <input id="autokmstand" name="autokmstand" type="text">
    <br>
    <label for="klantid"> klant id : </label>
    <input id="klantid" name="klantid" type="text">
    <br>
    <label for="fileToUpload">upload foto</label>
    <input type="file" name="image" id="fileToUpload">
    <br>
    <input type="submit" name="submit">

</form>
</body>
</html>