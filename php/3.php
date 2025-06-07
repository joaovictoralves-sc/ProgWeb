<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>

<h2>Calculadora de IMC</h2>

<form action="">


<input type="" name="P" step="0.1" placeholder="insira o seu peso">

<input type="" name="A" step="0.1" placeholder="insira o sua altura">

<input type="submit">

</form>

<?php


$P=0; $A=0;
if(isset($_GET["P"])){
    $P=$_GET["P"];
}
if(isset($_GET["A"])){
    $A=$_GET["A"];
}
$P=floatval($_GET["P"]);
$A=floatval($_GET["A"]);

echo "O SEU IMC É = ";
echo $P/($A*$A);
?>

</body>
</html>