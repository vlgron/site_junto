<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>média aritméticas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../ex006/favicon-16x16.png" type="image/x-icon">
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ;
        $v2 = $_GET['v2'];
        $p1 = $_GET['p1'] ;
        $p2 = $_GET['p2'] ;

    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Calculo das Médias</h2>
        <?php 

            $peso = $p1 + $p2;
            $simples = ($v1 + $v2) / 2;
            $ponderada = ($v1 * $p1 + $v2 * $p2) / $peso;
            //var_dump($ponderada);

            echo "<p>Analisando os valores $v1 e $v2, temos:";
            echo "<ul><li> A <strong>Média Aritmética Simples</strong> entre os valores é igual á $simples</li>";
            echo "<li> A <strong>Média Aritmética Ponderada</strong> com pesos $p1 e $p2 é igual á $ponderada</li></ul>";

        ?>
    </section>
    <p><a style="color: white;" href="../matematica.html">Voltar</a></p>
    
    
</body>
</html>