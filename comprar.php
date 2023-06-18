<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Comprar</title>
    <link href="styles/style.css" rel="stylesheet" />
    <link href="styles/comprar.css" rel="stylesheet" />
</head>


<?php
include_once 'connect_db.php';

$id = $_GET['id'];

if($sql_imovel = mysqli_query($conexaoBD, 'SELECT preco, nome, endereco, proprietario FROM imovel WHERE imovel_id = ' . $id . ';'));

while($row = mysqli_fetch_array($sql_imovel)) {
    $preco[] = $row['preco'];
    $nome[] = $row['nome'];
    $endereco[] = $row['endereco'];
    $proprietario[] = $row['proprietario'];
}


$sql_proprietario = mysqli_query($conexaoBD, 'SELECT nome WHERE usuario_id = ' . $proprietario[0] . ';');

while($row = mysqli_fetch_array($sql_proprietario)) {
    $proprietario = $row['nome'];
}

mysqli_close($conexaoBD);

?>

<body>
    <?php include_once 'navbar.php'; ?>
    <main class="Comprar">
        <div class="foto">
            <img src="assets/hotel.jpeg" alt="" />
        </div>
        <div class="descricao">
            <h2>A partir de</h2>
            <h2 class="preco">$ <?php $preco[0];?></h2>
            <p>Enim ut sem viverra aliquet eget sit amet tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra, magna ac placerat vestibulum? Velit ut tortor pretium viverra suspendisse potenti nullam.</p>
            <p><b>Metragem</b>: 60 m² de área útil</p>
            <p><b>Proprietário:</b></p>
        </div>
    </main>
</body>

</html>
