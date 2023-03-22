<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir a Soma do 2 números</title>
</head>
<body>
    <?php
        echo "<h3>Efetua o cálculo e exibe a soma de 2 números</h3>";
        $numero1 = $_GET["num1"];
        $numero2 = $_GET["num2"];
        $soma = $numero1 + $numero2;
        echo "Número1: " .$numero1;
        echo "<br>Número2: " .$numero2;
        echo "<hr>Soma dos 2 números: " .$soma;

        echo "<h1>VOOOOO JOGAR SAL GROOOOSSOOOO</h1>";
        echo "<img src='images/salgrosso.jpg'>";
    ?>
    
</body>
</html>