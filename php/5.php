<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Progressão Aritmética</title>
</head>
<body>
<h2>Imprima todos os termos de uma P.A. N informado pelo usuário</h2>
<form method="get">
<label for="n">Informe o índice do termo (N):</label>
<input id="n" type="text" name="n" required>
<input type="submit" value="Gerar">
</form>
<?php
$a1 = 0;
$r = 3;

$n = isset($_GET["n"]) ? (int)$_GET["n"] : 0;

if ($n > 0) {
    echo "<h3>Primeiros $n termos da PA:</h3>";
    for ($i = 1; $i <= $n; $i++) {
        $termo = $a1 + ($i - 1) * $r;
        echo "a$i = $termo<br />";
    }
}
?>
</body>
</html>
