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
        $t = "Aqui temos um texto gigante criado  pelo PHP e vai mostrar o funcionamento";
        $r = wordwrap($t,5,"<br>\n",true);
        echo $r;
    ?>
</body>
</html>