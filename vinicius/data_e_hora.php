<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Data e Hora em PHP</title>
</head>
<body>
    <?php
        echo "<h3 align='center'>DATA E HORA EM PHP</h3><hr>";
        date_default_timezone_set("America/Sao_Paulo");
        
        //Exibindo o dia, o mês e o ano
        $dia = date("d"); // Extrai o dia da função date
        $mes = date("m"); // Extrai o mês da função date
        $ano = date("y"); // Extrai o ano da função date
 
        echo "<h4>Exibe a data do sistema operacional</h4>";
        echo "Hoje é Dia " . $dia ." do mês ". $mes ." no ano de " . $ano ."<hr>";


        //Extraindo a hora, o minuto e o segundo
        $hora = date("h");
        $minuto = date("i");
        $segundo = date("s");
        echo "<h4>Exibe a hora do sistema operacional</h4>";
        echo "Agora são ". $hora ."horas ". $minuto ."minutos " . $segundo ."segundos<hr>";
 
 ?>
    
</body>
</html>