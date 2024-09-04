<?php

    $paragrafo = $_GET['paragrafo'];
    $censura = $_GET['censura'];

    $paragrafoCensurato = str_replace($censura, '***', $paragrafo)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati passati</title>
</head>
<body>
    <h1>Primo esercizio di PHP</h1>
    <h3>Questo e' il paragrafo che e' stato scritto</h3>
    <p><?php echo $paragrafo ?></p>
    <h4>E questa e' la sua lunghezza</h4>
    <p><?php echo strlen($paragrafo) ?></p>
    <h3>Questo e' il paragrafo modificato</h3>
    <p><?php echo $paragrafoCensurato ?></p>
    <h4>E questa e' la sua lunghezza</h4>
    <p><?php echo strlen($paragrafoCensurato) ?></p>
</body>
</html>