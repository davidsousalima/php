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
    $v = isset($_GET["num"])?$_GET["num"]:1;
    echo "<h1>Calculando a Tabuada de $v</h1>";
    $c = $v;
    $tab = 1;
    do{
        $b = $tab * $c;
        $tab++;
    }while($b >= 10);
    echo " $b"
    
    ?>
    <a href="tabuada.html">Volta<a>
</body>
</html>