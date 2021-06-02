<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>iniciando o desenvolvimento da Calculadora </h1>
    <?php
        $valor1 = $_GET["a"];
        $valor2 = $_GET["b"];
        $soma = $valor1 + $valor2;
        $subtracao = $valor1 - $valor2;
        $multiplicacao = $valor1 * $valor2;
        $divisao = $valor1 / $valor2;
        $mod = $valor1 % $valor2;
        echo "<br/>Primeiro numero da operação A: $valor1";
        echo "<br/>Segundo numero da operação B: $valor2";
        echo "<br/>A soma dos dois numeros é: $soma";
        echo "<br/>A subtração da operação é: $subtracao ";
        echo "<br/> Multiplicação da operação é: $multiplicacao";
        echo "<br/> Divisão dos dois numros é: $divisao";
        echo "<br/> Modulo dos dois numros é: $mod";
    ?>

    
</body>
</html>