<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $m = ($n1 + $n2) /2;
        echo "<h2>Valores  recebidos: $n1 e $n2</h2>";
        echo "A soma vale ". ($n1+$n2);
        echo "<br/>A subtracao vale ". ($n1-$n2);
        echo "<br>A multiplicação vale ".($n1*$n2);
        echo "<br>A divisao vale " .($n1/$n2);
        echo "<br>O modulo vale " .($n1%$n2);
        echo "<br>A media vale $m";
    ?>
</body>
</html>