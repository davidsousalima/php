<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio02.php" method="get">
        <?php
        $n = 1;
        while($n<= 5){
            echo "Valor: <input type='number' name='v$n' max='100' min='0' value='0'><br>";
            $n ++;
        }
        
        ?>
        <input type="submit" value="Enviar" >
    </form>
</body>
</html>