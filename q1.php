<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Verificação de Idade </title>
</head>
<body>

<?php

  $nome = $_GET["nome"];
  $idade = $_GET["idade"];
  
  if ($idade < 17) {

    echo "Você não pode ser cadastrado!, Só é permitido maiores de 18";
  } else {
    echo "Seja bem-vindo!";

  }





?>
</body>
</html>