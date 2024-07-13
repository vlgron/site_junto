<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinheiro convertido</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../desafio013/favicon-16x16.png" type="image/x-icon">
</head>
<body>
    
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 

            //Quantos reais voce tem carteira?
            $n = $_GET["dinheiro"] ?? 0;

            //cotação fixa do google
            $c = $_GET["dinheiro"] / 5.22;

            $int = (int)$c;

            echo "Seus $n equivalem a <strong>US$ $int</strong><br><br>
            
            <strong>cotação fixa de R$ 5,22</strong> informada diretamente no código";

        ?>
        <p><a link href="index.php">Voltar para inicio</a></p>
    </main>
    
</body>
</html>