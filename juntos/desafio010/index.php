<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade por ano</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../ex002/favicon-16x16.png" type="image/x-icon">
</head>
<body>
    <?php 
           
        $id = $_GET['id1'] ?? 0;
        $ano = $_GET['ano1'] ?? date('Y');       

    ?>
    <main>
        <h1>Calculando sua idade </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="id1">Em que ano você nasceu?</label>
            <input type="number" name="id1" id="id1" value="<?=$id?>">
            <label for="ano1">Quer saber sua idade em que ano? atualmente estamos em <?=date('Y')?></label>
            <input type="number" name="ano1" id="ano1" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>   
        <h2>Resultado</h2>
        <?php 

            $nasceu = $ano - $id;
            echo "<p>Quem nasceu em $id vai ter <strong>$nasceu</strong> em $ano</p>";

        ?>
    </section>
    <p><a style="color: white;" href="../data.html">Voltar</a></p>

    
</body>
</html>