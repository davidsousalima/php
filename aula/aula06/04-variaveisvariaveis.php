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
        $x = "abc";
        $$x = "def";
        echo "O Conteudo da variavel X e $x";
        echo "<br>A variavel criada recebeu o valor $abc";
    ?>
</body>
</html>