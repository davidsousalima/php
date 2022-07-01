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
        Exercicio03
        Realize  uma soma com múltiplos parâmentros
    -->
    <?php
        function soma(){
            $p = func_get_arg();
            $t = func_num_args();
            $s = 0;
            for($i=0; $i<$t ;$i++){
                $s = $s +$p[$i];
            }
            return $s;
        }
        $r = soma(3,5,2);
        echo "A soma do valores e $r";
    ?>
</body>
</html>