<?php
include 'connect_db.php';
$nome = $_POST["campo_nome"];
$email = $_POST["campo_email"];
$conf_email = $_POST["campo_email_confirmar"];
$senha = hash('sha256', $_POST["campo_senha"]);
$conf_senha = hash('sha256', $_POST["campo_senha_confirmar"]);
$genero = $_POST["campo_genero"];

echo $nome . '<br>';
echo $email . '<br>';
echo $conf_email . '<br>';
echo $senha . '<br>';
echo $conf_senha . '<br>';

if ($genero == "1") {
	echo "Homem transgênero<br>";
}

else if ($genero == "2") {
	echo "Homem cisgênero<br>";
}

else if ($genero == "3") {
	echo "Mulher transgênera<br>";
}

else if ($genero == "4") {
	echo "Mulher cisgênera<br>";
}

else if ($genero == "5") {
	echo "Panzerkampfwagen Sturmpanzer IV<br>";
}

else if ($genero == "6") {
	echo "Outro<br>";
}

else if ($genero == "7") {
	echo "Prefiro não dizer<br>";
}


if (!is_set($nome) || !is_set($email) || !is_set($senha) || !is_set($conf_email) || !is_set($conf_senha) || (!is_set($genero) || $genero == "0")) {
	echo "algo falta";
} else if ($senha != $conf_senha || $email != $conf_email) {
	echo "senha ou email não são iguais";
} else {
	echo "tudo ok";
}

$sql = mysqli_query($conexaoBD,
"INSERT INTO usuario(nome, email, senha, genero) VALUES ('$nome', '$email', '$senha', '$genero')");

if ($sql) {
	header('location: index.php');
}

mysqli_close($conexaoBD);

?>
