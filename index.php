<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP BadWords</title>
</head>
<body>
    <form action="./dati.php" method="GET">
    <div class="mb-3">
        <label for="paragrafo" class="form-label">Paragrafo</label>
        <input type="text" class="form-control" id="paragrafo" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="censura" class="form-label">Parola da censurare</label>
        <input type="text" class="form-control" id="censura">
    </div>
    <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</body>
</html>