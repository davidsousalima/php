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
        $n = array(0=>5,1=>9,2=>8,3=>7);
        unset($n[0]); 
        print_r($n);
           
    ?>
</body>
</html>