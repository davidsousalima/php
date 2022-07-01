<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php
    $c = isset($_GET["val"])?$_GET["val"]:1;
    echo "<h1>Calculando  o fatorial  de $c</h1>";
    $v = $c;
    $fat = 1;
    do{
        $fat = $fat* $v;
        $v--; 
    }while($v >=1);
    echo "<h2>$c ! = $fat</h2>"
   ?> 
   <a href="fatorial.html" class="botao">Volta<a>
</body>
</html>