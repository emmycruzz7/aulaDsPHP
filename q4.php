<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
   
<title>Validação de Usuário</title>
</head>
<body>

 <?php

 
$nome = $_POST["nome"];
$senha = $_POST["senha"];



if ($nome == "admin" && $senha == 1234 ) {
    
    echo "Login bem-sucedido!, Seja Bem Vindo";
   
} else{
    echo "Login ou Senha Incorretos";
}

?>

</body>
</html>