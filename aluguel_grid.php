<?php
include_once 'connect_db.php';
$sql = mysqli_query($conexaoBD, "SELECT imovel_id, preco, metros_quadrados, imagem FROM imovel");

echo '<pre>'; print_r($row); echo '</pre>';

while($row = mysqli_fetch_array($sql)) {
   $imovel_id[] = $row['imovel_id'];
   $preco[] = $row['preco'];
   $metros[] = $row['metros_quadrados'];
   $imagem[] = $row['imagem'];
}

mysqli_close($conexaoBD);

?>

<div class="grade_imoveis">
    <?php for ($x=0; $x < count($imovel_id); $x++) {
        echo '
    <div class="item_imoveis">
        <img src="localhost:8080/' . $imagem[$x] . '" alt="">
        <div style="display: flex; flex-direction: column; align-items: center">
            <span>A partir de</span>
            <span class="preco">R$ ' . $preco[$x] . '</span>
            <span>'. $metros[$x] .' metros quadrados</span>
            <a href="comprar.php?id=' . $imovel_id[$x] .'" class="comprar_btn">Comprar</a>
        </div>
    </div>
    ';}?>

</div>


