<?php 

    require 'index.html';     

    $num1 = 32;
    $num2 = 32;

    $operacao = ($num1 * $num1) / $num2;
        if ($operacao < 16.9){
            echo 'Você está muito abaixo do peso';
        };

        if ($operacao >= 17 or $operacao <= 18.4){
            echo 'Você está abaixo do peso';
        };

        if ($operacao >= 18.5 or $operacao <= 24.9){
            echo 'Seu peso está normal';
        };

        if ($operacao >= 25 or $operacao <= 29.9){
            echo 'Você está acima do peso';
        };

        if ($operacao >= 30 or $operacao <= 34.9){
            echo 'Você está em Obesidade grau 1';
        };

        if ($operacao >= 35 or $operacao <= 40){
            echo 'Você está em Obesidade grau 2';
        };

        if ($operacao > 40){
            echo 'Você está em Obesidade grau 1';
        };
    
    echo "<script> alert('IMC calculado com sucesso!'); </script>";
    echo "<script> location .href= 'index.html'; </script>";

?>