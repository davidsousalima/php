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
        exercicio 02
        Crie uma função que some dois valores numéricos inteiros.
    -->
    <?php
        function some($a,$b){
            $s = $a + $b;
            return $s;
        }
        $x = 3;
        $y = 4;
        $r = some($x,$y);
        echo "A soma entre $x e $y e igual a $r";
    ?>
</body>
</html>