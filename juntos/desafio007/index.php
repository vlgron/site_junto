<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario minimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

        $valor1 = $_GET['s1'] ?? 0;
        $salario = 1.412;
    ?>
    <main>
        <h1>Informe seu salario:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="s1">Salário {R$}</label>
            <input type="number" name="s1" id="s1" value="<?=$valor1?>">
            <p>Considerando o salario minimo de <strong>R$ 1.412,00</strong></p>
            <input type="submit" value="Calcular">            
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            // calcular quantos salarios minimos cabem no determinado valor!!
        ?>

    </section>
    
</body>
</html>