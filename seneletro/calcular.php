<?php

print_r($_POST);

$quilowattsHora= $_POST["quilowattsHora"];
$nomeCompletoCliente= $_POST["nomeCompletoCliente"];
$endereco= $_POST["endereco"];
$agradecimento = "Obrigado por economizar!";


if($quilowattsHora >120) {

    
$valorConta= (0.42 * $quilowattsHora );

echo "<br> <br>  <font size='5'> <b> Conta de luz de  $nomeCompletoCliente </b> </font> <br>";

echo "$endereco. <br>";

echo "<font color='#FF0000'> Consumo: $quilowattsHora kWh </font> <br>";

echo "O valor a pagar:  <font size='5'> <b> R$$valorConta </b> </font> <br>";




} else if ($quilowattsHora <= 120) {

    $valorConta= (0.32 * $quilowattsHora);

    echo "<br> <br>  <font size='5'> <b> Conta de luz de $nomeCompletoCliente </b> </font> <br>";

echo "$endereco. <br>";

echo "<font color='#90ee90'> Consumo: $quilowattsHora kWh </font> <br>";

echo "O valor a pagar:  <font size='5'> <b> R$$valorConta </b> </font> <br>";

echo $agradecimento;
}


?>




