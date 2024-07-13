<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon-16x16.png" type="image/x-icon">
</head>
<body>
    <header><h1>Resultado do processamento</header>
    <main>
        <?php 
            $n = $_GET["nome"] ?? "sem nome";
            $s = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um grande prazer te conhecer, <strong>$n $s</strong></p>";
        
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
    
</body>
</html>



