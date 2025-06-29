<?php
$conn = new mysqli("localhost", "root", "", "seubanco");

if ($conn->connect_error) {
  die("Erro: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

if ($conn->query($sql) === TRUE) {
  echo "Cadastro realizado com sucesso!";
} else {
  echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>
