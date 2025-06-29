<?php
$inicio = $_GET['inicio'];
$fim = $_GET['fim'];

for ($i = $inicio; $i <= $fim; $i++) {
  echo "<span class='numero'>$i</span> ";
}
?>
