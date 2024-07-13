<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios de raízes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../ex006/favicon-16x16.png" type="image/x-icon">
</head>
<body>
    <?php 

        $valor1 = $_GET['n1'] ?? 0;
    
    ?>
    <main>
        <h1>Informe um numero </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">Número</label>
            <input type="number" name="n1" id="n1" value="<?=$valor1?>">
            <input type="submit" value="Calcular Raiz">        
        </form>
    </main>
    <section>
        <h2>Resulatdo Final</h2>
        <?php 

            $Q = sqrt($valor1);
            $c = $valor1 ** (1/3);

            echo "<p>Analisando o <strong> numero $valor1</strong>, temos:";
            echo "<ul><li> A sua raiz Quadrada é <strong>$Q</strong></li>";
            echo "<li>A sua raiz Cúbica é <strong>$c</strong></li></ul>";
        
        ?>

    </section>
    <p><a style="color: white;" href="../matematica.html">Voltar</a></p>
    
</body>
</html>