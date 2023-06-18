<?php 
include_once "connect_db.php";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["imagem"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["imagem"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["imagem"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$endereco = $_POST['endereco'];
$preco = $_POST['preco'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$metros_quadrados = $_POST['metros_quadrados'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$disponibilidade = 'V';
$proprietario = 2;

echo $endereco . "<br>";
echo $descricao . "<br>";
echo $bairro . "<br>";
echo $cep . "<br>";
echo $disponibilidade . "<br>";
echo $proprietario . "<br>";
echo $nome . "<br>";
echo $imagem . "<br>";
echo $preco . "<br>";

// imovel_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
//     nome VARCHAR(32) NOT NULL,
//     preco INT NOT NULL,
//     cep VARCHAR(8) NOT NULL,
//     bairro VARCHAR(32) NOT NULL,
//     endereco VARCHAR(128) NOT NULL,
//     descricao VARCHAR(256),
//     imagem BLOB,
//     metros_quadrados INT NOT NULL,
//     disponibilidade VARCHAR(1),
//     proprietario INT NOT NULL,
//     FOREIGN KEY(proprietario) REFERENCES usuario(usuario_id)


$base_imagem = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$sql = mysqli_query($conexaoBD,
"INSERT INTO `imovel`(`nome`, `preco`, `cep`, `bairro`, `endereco`, `descricao`, `imagem`, `metros_quadrados`, `disponibilidade`, `proprietario`) VALUES ('$nome','$preco','$cep','$bairro','$endereco', '$descricao','$base_imagem','$metros_quadrados','$disponibilidade','$proprietario')");

if ($sql) {
	header('location: index.php');
} else {
	echo 'error ' . $sql . mysqli_error($conexaoBD);
}

mysqli_close($conexaoBD);



?>
