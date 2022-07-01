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
    $p = "café" ;
    $preco = 4.5;
    //echo "O $p  custa R$".number_format($preco,2);
    printf("O %s custa R$ %f",$p,$preco);
   ?> 
</body>
</html>