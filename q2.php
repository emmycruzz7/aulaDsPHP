<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de Notas</title>
</head>
<body>
    

<?php

  $nome = $_POST["nome"];
  $nota = $_POST["nota"];
  
  switch ($nota) {

    case 10;
    echo "Parabéns, sua nota foi A";
    break;

    case 9;
    echo "Parabéns, sua nota foi B";
    break;

    case 8;
    echo "Sua nota foi C";
    break;

    case 7;
    echo "Sua nota foi C";
    break;

    case 6;
    echo "Sua nota foi D";
    break;

    case 5;
    echo "Sua nota foi D";
    break;


    case ($nota>0 && $nota<=4);
    echo "Sua nota foi E";
    break;

  }

?>
</body>
</html> 