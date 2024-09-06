<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa da Mimi</title>
</head>
<body>
    <h1>Operações Bancárias</h1>
    <form action="" method="post">
        <label for="option">Selecione a Opção:</label>
        <select id="option" name="option">
            <option value="1">1 - Ver Saldo</option>
            <option value="2">2 - Depositar</option>
            <option value="3">3 - Sacar</option>
            <option value="4">4 - Sair</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <?php
  
    $saldo = 60000;

    // Utiliza switch para executar a ação correspondente à opção selecionada
    switch ($_POST['option']) 
    {
        case '1': 
            //<!-- Exibe o saldo atual -->
            echo "<p>Seu saldo atual é: R$  $saldo </p>";
            break;
        case '2': 
            //<!-- Formulário para depositar -->
            echo "<form action=\"\" method=\"post\">
                <label for=\"valor\">Digite o valor a ser depositado:</label>
                <input type=\"number\" id=\"valor\" name=\"valor\">
                <input type=\"hidden\" name=\"option\" value=\"2\">
                <input type=\"submit\" value=\"Depositar\">
            </form>";
            
            // Atualiza o saldo com o valor depositado
            $saldo += $_POST["valor"] ?? 0; 
           echo" <p>Valor depositado com sucesso! Seu novo saldo é: R$ = $saldo </p>";
            break;
        case '3': 
            //<!-- Formulário para sacar -->
          echo"  <form action=\"\" method=\"post\">
                <label for=\"valor\">Digite o valor a ser sacado:</label>
                <input type=\"number\" id=\"valor\" name=\"valor\">
                <input type=\"hidden\" name=\"option\" value=\"3\">
                <input type=\"submit\" value=\"Sacar\">
            </form> ";
            echo " Estou no case de saque!!!!";
            // Verifica se o saldo é suficiente para o saque
            if ($_POST["valor"] <= $saldo) {
                // Atualiza o saldo com o valor sacado
                $saldo -= $_POST["valor"] ?? 0; 
               echo" <p>Valor sacado com sucesso! Seu novo saldo é: R$ = $saldo </p>";
            } else { 
                echo"<p>Saldo insuficiente!</p>";
            }
            break;

        case '4': 
          echo"<p>Até logo!</p>";
            
            break;
        default: 
           // <!-- Exibe mensagem de opção inválida -->
           echo "<p>Opção inválida!</p>";
            
    }