<?php
$num = $_POST['numero'];
for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = " . ($num * $i) . "<br>";
}
?>