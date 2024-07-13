<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8"/>
<title>Calculadora</title>
<link rel="stylesheet" href="../estilo.css">
<link rel="shortcut icon" href="favicon-16x16.png" type="image/x-icon">
</head>
<body>

    <label for="numero1">Digite um número:</label>
    <input type="text" id="numero1"><br><br>
    
    <label for="operacao">Escolha a operação</label>
    <select id="operacao">
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="%">%</option>
    </select><br><br>

    <label for="numero2">Digite outro número:</label>
    <input type="text" id="numero2"><br><br>

    <input class="confirmar" type="button" value="Calcular" onclick="calcular()">

    <p id="resultado"></p>

    <script>
        function calcular() {
            var num1 = parseFloat(document.getElementById("numero1").value);
            var num2 = parseFloat(document.getElementById("numero2").value);
            var operacao = document.getElementById("operacao").value;
            var resultado;

            switch (operacao) {
                case "+":
                    resultado = num1 + num2;
                    break;
                case "-":
                    resultado = num1 - num2;
                    break;
                case "*":
                    resultado = num1 * num2;
                    break;
                case "/":
                    resultado = num1 / num2;
                    break;
                case "%":
                    resultado = (num1 * num2) / num1;
                    break;
                default:
                    resultado = "Operação inválida";
            }

            document.getElementById("resultado").innerText = "Resultado: " + resultado;
        }
    </script>
    <p><a style="color: white;" href="../matematica.html">Voltar</a></p>
</body>
</html>
