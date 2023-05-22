<?php
include 'connect_db.php';
$nome = $_POST["campo_nome"];
$email = $_POST["campo_senha"];
$senha = hash('sha256', $_POST["campo_email"]);

$sql = mysqli_query($conexaoBD, 
"INSERT INTO cliente(nome, apelido, email, senha) VALUES ('$nome', '$nome', '$email', '$senha')");
	
	if ($sql) {
		header('location: index.php');
	}


?>