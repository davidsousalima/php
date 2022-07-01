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
        crie um procedimento que some dois vaolores numericos interiros.
    -->
    <?php
        function soma($a, $b){
            $s = $a + $b;
            echo "A soma vale $s<br>";
        }
        soma(3,4);
        soma(8,2);
        $x = 9;
        $y = 15;
        soma($x,$y);
    ?>
</body>
</html>