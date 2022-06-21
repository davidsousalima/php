<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        $n = isset($_GET["num"])?$_GET["num"]:0;
        switch ($n) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                echo "REGIÃO NORDESTE";
                break;
            case 10:
            case 11:
            case 12:
            case 13:
            case 14:
            case 26:
            case 15:
                echo "REGIÃO NORTE";
                break;
            case 16:
            case 17:
            case 18:
                echo "REGIÃO CENTRO-OESTE";
                break;
            case 19:
            case 20:
            case 21:
            case 22:
                echo "REGIÃO SUDESTE";
                break;
            case 23:
            case 24:
            case 25:
                echo "REGIÃO SUL";
                break;
            



        }
        ?>
    </div>
</body>
</html>