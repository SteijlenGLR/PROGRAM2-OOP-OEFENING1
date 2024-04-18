<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROGRAM2 - OOP</title>
</head>
<body>
<h1>Eerste demo, gebruik van functies</h1>
<p>Deze pagina toont de inhoud van een array</p>
<?php
foreach ($data as $key => $value) {
    if (is_array($value)) {
        echo "<strong>$key</strong>:<br>";
        foreach ($value as $item) {
            // Hoe gaan we voor zorgen dat als het $item ook een array is, dat we die ook netjes tonen?
            echo "- $item<br>";
        }
    } else {
        echo "<strong>$key</strong>: $value<br>";
    }
}
?>
</body>
</html>