<?php
$md5 = "Not computed";

if (isset($_GET['encode'])) {
    $md5 = hash('md5', $_GET['encode']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyae Bhone Zaw MD5 PIN</title>
</head>

<body>
    <h1>MD5 PIN Maker</h1>

    <p>MD5: <?= htmlentities($md5); ?></p>

    <form>
        <input type="text" name="encode" size="40">
        <input type="submit" value="Compute MD5 for PIN">
    </form>

    <ul>
        <li><a href="./index.php">Back to Cracking</a></li>
    </ul>
</body>

</html>