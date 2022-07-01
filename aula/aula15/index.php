<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        exercicio 01
        Criar um procedimento que use a passagem de parâmetros por  referência
    -->
    <?php
        function teste(&$x){
            $x += 2;
            echo "O valor de X e $x<br>";
        }
        $a = 3;
        teste($a);
        echo "O valor de A  e $a";
    ?>
</body>
</html>