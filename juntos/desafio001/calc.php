<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../ex006/favicon-16x16.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>
    <main>
        <?php 
            
            $r = $_GET["numero"] ?? "não escolheu numero!!";
            $a = $_GET["numero"] - 1;
            $s = $_GET["numero"] + 1;

            echo "O numero escolhido foi $r, Seu antecessor é $a, Seu sucessor é $s";
            
            //echo "Seu antecessor é $a";

            //echo "Seu sucessor é $s";
            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>


    </main>

    
</body>
</html>