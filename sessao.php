<?php
session_start();

$y = $_POST['y'];

$_SESSION['y'] = $y;

echo $_SESSION['y'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <a href="triplo.php"> Triplo
</body>
</html>