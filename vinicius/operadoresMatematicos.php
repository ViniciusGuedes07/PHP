<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos em PHP</title>
</head>
<body>
    <?php
        echo "<center><h3>OPERADORES MATEMÁTICOS EM PHP</h3></center>";
        $valor1 = 12; //Variável do tipo inteiro
        $valor2 = 13; //Variável do tipo inteiro
        $adicao = $valor1 + $valor2; //Faz o cálculo da duas variáveis $valor1 e $valor2 e armazena na variável $adição
        $subtracao = $valor1 - $valor2;
        $mult = $valor1 * $valor2;
        $div = $valor1 / $valor2;

        echo "<strong>Valor 1: </strong>" .$valor1;
        echo "<br><strong>Valor 2: </strong>" .$valor2;
        echo "<hr align='left' color= '#FFFF00' width='350' size=3>";


        echo "<h4>Cálculo do operador matemático soma:</h4>";
        echo "<br>A soma de $valor1 e $valor2 é $adicao";
        echo "<hr align='left' color= '#0000ff' width='350' size=3>";

        echo "<h4>Cálculo de operador matemático subtração:</h4>";
        echo "<br>A subtração de $valor1 e $valor2 é $subtracao";
        echo "<hr align='left' color= '#00FF00' width='350' size=3>";

        echo "<h4>Cálculo de operador matemático multiplicação:</h4>";
        echo "<br>A multiplicação de $valor1 e $valor2 é $mult";
        echo "<hr align='left' color= '#FFFF00' width='350' size=3>";

        echo "<h4>Cálculo de operador matemático divisão:</h4>";
        echo "<br>A divisão de $valor1 e $valor2 é $div";
        echo "<hr align='left' color= '#0000ff' width='350' size=3>";

        echo "<h4>Exibindo o tipo de variável</h4>";
        echo var_dump($valor1) . " - <em>Variável do tipo <b>inteiro</b></em><br>";
        echo var_dump($valor2) . " - <em>Variável do tipo <b>inteiro</b></em><br>";
        echo "<hr align='left' color= '#00FF00' width='350' size=3>";


    ?>
</body>
</html>