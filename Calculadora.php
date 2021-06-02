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
        echo "<br/>Primeiro numero da operação: $valor1";
        echo "<br/>Segundo numero da operação: $valor2";
        echo "<br/>A soma dos dois numeros é: $soma";
        



    ?>

    
</body>
</html>