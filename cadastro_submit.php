<?php
include 'connect_db.php';
$nome = $_POST["campo_nome"];
$email = $_POST["campo_email"];
$senha = hash('sha256', $_POST["campo_senha"]);
$genero = $_POST["campo_genero"];

if (!is_set($nome) || is_set($email) || is_set($senha) ||)

$sql = mysqli_query($conexaoBD,
"INSERT INTO usuario(nome, email, senha, genero) VALUES ('$nome', '$email', '$senha', '$genero')");

if ($sql) {
	header('location: index.php');
}

mysqli_close($conexaoBD);

?>
