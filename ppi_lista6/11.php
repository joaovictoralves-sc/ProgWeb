<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
  if ($a == $b && $b == $c) {
    echo "Triângulo Equilátero";
  } elseif ($a == $b || $a == $c || $b == $c) {
    echo "Triângulo Isósceles";
  } else {
    echo "Triângulo Escaleno";
  }
} else {
  echo "Os valores não formam um triângulo.";
}
?>
