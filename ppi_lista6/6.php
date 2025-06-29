<?php
$numero = $_POST['numero'];
echo "Número informado: <strong>$numero</strong><br>";
echo ($numero % 2 == 0) ? "Resultado: <strong>Par</strong>" : "Resultado: <strong>Ímpar</strong>";
?>
