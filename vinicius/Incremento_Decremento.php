<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento e Decremento em PHP</title>
</head>
<body>
    <?php
        echo "<h3 align='center'>INCREMENTO E DECREMENTO EM PHP</h3><hr>";
        echo "<h4>Incremento</h4>";
        $contador = 0;
        echo "Variável contador inicializando em " .$contador;

        $contador +=1; //Incremento mais 1 na variável contador
        echo "<p>Valor de variável <strong>contador</strong> com incremento de $contador" . "<p>";

        $contador +=5; //Incremento mais 1 na variável contador
        echo "<p>Valor de variável <strong>contador</strong> com incremento de 5, é igual a $contador" . "<p>";

        echo "<h4>Decremento</h4>";
        $contador -=2;
        echo "Com decremento de 2, o contador atual é igual a $contador";




    ?>
    
</body>
</html>