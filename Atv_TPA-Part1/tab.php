<?php
header("content-type:text/html; charset=utf8");
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$imc = 0;



$imc = $peso / ($altura * $altura);

echo "Altura: $altura <br>";
echo "Peso: $peso <br>";
echo "IMC = $imc";



?>
