<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Números</title>
</head>
<body>
    <?php

    $num = $_POST["num"];



    if ($num%2 ==0) {
        
        echo "Número par!";

    } else{

        echo "Número ímpar!";

    }
    
    ?>
</body>
</html>