<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de temperatura de Fahrenheit para Celsius</title>
</head>
<body>
    
<form action="" method="POST">

<label for="Valor do fahrenheit"> valor em Fahrenheit: (°F)</label>
<input type="number" id="F" name="F"><br><br>

<button type="submit">Converter</button>
<button type="reset">Limpar</button>

</form>
<?php

$F=$_POST["F"] ??0;


function Conversao ($F){

    $C = (($F-32)*5)/9;

    return $C;
}
$Temp= Conversao($F); 

echo "<br>A temperatura $F °F vale em Celsius $Temp °C";

?>
</body>
</html>