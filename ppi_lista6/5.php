<?php
$min = $_GET['min'];
$max = $_GET['max'];

if (is_numeric($min) && is_numeric($max) && $min <= $max) {
    $sorteado = rand($min, $max);
    echo "Número sorteado entre $min e $max: <strong>$sorteado</strong>";
} else {
    echo "Por favor, informe um intervalo válido (mínimo menor ou igual ao máximo).";
}
?>