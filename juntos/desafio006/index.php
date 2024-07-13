<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia da divisão</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../ex006/favicon-16x16.png" type="image/x-icon">
</head>
<body>
    <?php 

        $v1 = $_GET['d1'] ?? 0;
        $v2 = $_GET['D1'] ?? 1;
        //$Q = ;
    
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="d1">dividendo</label>
            <input type="number" name="d1" id="d1" value="<?=$v1?>">
            <label for="D1">Divisor</label>
            <input type="number" name="D1" id="D1" value="<?=$v2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da divisão</h2>
        <?php 

            $q = intdiv($v1, $v2);
            $r = $v1 % $v2;
        ?>

        <table class="divisao">
            <tr>
                <td><?=$v1?></td>
                <td><?=$v2?></td>
            </tr>
            <tr>
                <td><?=$r?></td>
                <td><?=$q?></td>
            </tr>
           
        </table>
          
    </section>
    <p><a style="color: white;" href="../matematica.html">Voltar</a></p>
    
</body>
</html>