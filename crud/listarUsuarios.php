<?php
include_once __DIR__ . './modelo/Conexao.php';
include_once __DIR__ . './modelo/Usuario.php';
include_once __DIR__ . './modelo/UsuarioDAO.php';
include_once __DIR__ . './controlador/AuthController.php';

session_start();
if (!isset($_SESSION['usr'])) {
    header("Location:rota.php");
}

$dao = new UsuarioDAO();
$lista = $dao->lista_todos();
?>

<table>
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>email</th>
    </tr>
    <?php
    foreach ($lista as $usuario) {
        echo "<tr>";
        echo "<td>".$usuario->id."</td>";
        echo "<td>".$usuario->nome."</td>";
        echo "<td>".$usuario->email."</td>";
        echo "</tr>";
    }
    ?>
</table>
