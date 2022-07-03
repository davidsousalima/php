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
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Video";
        $text = implode("#",$vetor); //join()
        print($text);
    ?>
</body>
</html>