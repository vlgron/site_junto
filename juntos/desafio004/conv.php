<!DOCTYPE html>
<html lang="en">
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

            //Quantos reais voce tem na carteira?
            $real = $_GET["dinheiro"] ?? 0;

            //cotação vinda direta de uma API
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
        
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);             
        
            $cotação = $dados["value"][0]["cotacaoCompra"];

            $dolar = $real / $cotação;

            $resultado = (int)$dolar;

            //$padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus <strong>R$ $real</strong> equivalem a <strong>U$ $resultado</strong></p>";

        ?>
        <p><a link href="index.php">Voltar para inicio</a></p>
    </main>
    
</body>
</html>