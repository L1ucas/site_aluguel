<?php include_once "connect_db.php"; 

?>


<div class="grade_imoveis">
    <?php for ($x=0; $x < 10; $x++) {
        echo '
    <div class="item_imoveis">
        <img src="assets/hotel.jpeg" alt="">
        <div style="display: flex; flex-direction: column; align-items: center">
            <span>A partir de</span>
            <span class="preco">R$ 4000000</span>
            <span>10 metros quadrados</span>
        </div>
    </div>
    ';}?>

</div>


<?php $conn->close(); ?>