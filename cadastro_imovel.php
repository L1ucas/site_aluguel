<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cadastro_imovel.css">
    <title>Publicar imóvel</title>
</head>

<body>
    <?php include_once 'navbar.php'; ?>
    <main>
        <form action="imovel_cadastro.php" method="post">
        <label for="" class="item2">
                Nome
                <input type="text" name="nome" id="campo_nome">
            </label>
            <label for="" class="item2">
                Descrição
                <input type="text" name="descricao" id="campo_descricao">
            </label>
            <label for="" class="item1">
                Endereço
                <input type="text" name="endereco" id="campo_endereco">
            </label>
            <label for="" class="item2">
                Preço
                <input type="text" name="preco" id="campo_preco" oninput="maskara('preco')">
            </label>
            <label for="" class="item3">
                CEP
                <input type="text" name="cep" id="campo_cep">
            </label>
            <label for="" class="item4">
                Bairro
                <input type="text" name="bairro" id="campo_bairro">
            </label>
            <label for="" class="item5">
                Metros Quadrados
                <input type="text" name="metros_quadrados">
            </label>
            <label for="" class="item6">
                Adicione uma imagem
                <input type="file" name="imagem" id="" >
            </label>
            <button type="submit">Submit</button>
        </form>
    </main>

    <script type="text/javascript">
     function maskara(campo) {
         if (campo == "preco") {
             document.getElementById("campo_preco").value.replace(/\D/, "")
         }
     }
    </script>
</body>

</html>
