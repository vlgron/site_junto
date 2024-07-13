<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletronico</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon-16x16.png   " type="image/x-icon">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;   
        }
    </style>
</head>
<body>
    <?php 
    
        $din = $_GET['din1'] ?? 0;
    ?>
    <main>
        <h1>Caixa eletronico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="din1">Qual valor deseja sacar? (R$)*</label>
            <input type="number" name="din1" id="din1" step="5" required  value="<?=$din?>">
            <p>*Notas disponiveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar"> 
        </form>        
    </main>

    <?php 
    
        $resto = $din;
        //saque de R$100 
        $tot100 = floor($resto / 100);
        $resto %= 100;
        //saque de R$50
        $tot50 = floor($resto / 50);
        $resto %= 50;
        //saque de R$10 
        $tot10 = floor($resto / 10);
        $resto %= 10;
        //saque de R$5 
        $tot5 = floor($resto / 5);
        $resto %= 5;
    
    ?>
    <section>
       <h2>Saque de R$<?=$din?> realizado</h2>
       <p>O caixa eletronico vai te entregar as seguintes notas:</p>
       <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$tot100?> </li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$tot50?> </li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$tot10?> </li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$tot5?> </li>
       </ul>
    </section>
    <p><a style="color: white;" href="../dinheiro.html">Voltar</a></p>
    
</body>
</html>