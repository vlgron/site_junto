<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relógio simples</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon-16x16.png" type="image/x-icon">
</head>
<body>
    <h1>Relógio simples</h1>
    <?php
        date_default_timezone_set("America/Sao_paulo"); //GMT-3
        echo "hoje é dia " . date("d/m/Y");
        echo " e a hora atual é " . date("G:i:s T");
    ?>
    <p><a style="color: white;" href="../data.html">Voltar</a></p>
</body>
</html>