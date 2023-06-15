<?php
include_once 'connect_db.php';
$sql = mysqli_query($conexaoBD, "SELECT imovel_id, preco, metros_quadrados FROM imovel");

$row = mysqli_fetch_array($sql);

?>

<div class="grade_imoveis">
    <?php for ($x=0; $x < 10; $x++) {
        echo '
    <div class="item_imoveis">
        <img src="assets/hotel.jpeg" alt="">
        <div style="display: flex; flex-direction: column; align-items: center">
            <span>A partir de</span>
            <span class="preco">R$ ' . $row['preco'] . '</span>
            <span>'. $row['metros_quadrados'] .' metros quadrados</span>
            <a href="comprar.php?id=' . $row['imovel_id'] .'" class="comprar_btn">Comprar</a>
        </div>
    </div>
    ';}?>

</div>


<?php  ?>
