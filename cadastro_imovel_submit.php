<?php 
include_once "connect_db.php"; 


$endereco = $_POST['endereco'];
$preco = 45;
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$metros_quadrados = $_POST['metros_quadrados'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$imagem = $_POST['imagem'];
$disponibilidade = true;

echo $endereco . '<br>';
echo $preco . '<br>';
echo $cep . '<br>';
echo $bairro . '<br>';
echo $metros_quadrados . '<br>';
echo $imagem . '<br>';

$sql = mysqli_query($conexaoBD,
"INSERT INTO imovel(nome, imagem, descricao, preco, disponibilidade, endereco,\
 bairro, cep, senha, metros_quadrados)\
 VALUES ('$nome', '$imagem', '$descricao', '$preco', '$disponibilidade', '$endereco', '$bairro', '$cep', '$')");

if ($sql) {
	header('location: index.php');
}

mysqli_close($conexaoBD);



?>
