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
        $ano = $_GET["an"];
        $idade = 2022 - $ano;
        echo "Quem nasceu em $ano tem  idade de $idade anos ";
        $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
        echo "<br>E desse forma seu voto é $tipo";

    ?>
</body>
</html>