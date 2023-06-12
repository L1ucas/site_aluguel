<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/pagamento.css">
    <title>Pagamento</title>
</head>
<body>
    <?php include_once "navbar.php";?>

    <div class="main_div">
        <div class="second_to_main">
        <h1>Pagamento</h1>
        <form action="" class="main_form">
            <div class="dados_cartao">
                <h2>Dados do cartão</h2>
                <div class="fur">
                    <label for="">
                        Número do cartão
                        <input type="text" name="" value="" />
                    </label>
                    <label for="">
                        Nome do titular
                        <input name="" type="text" value=""/>
                    </label>
                    <label for="">
                        Vencimento
                        <input name="" type="text" value=""/>
                    </label>
                    <label for="">
                        CVC
                        <input name="" type="text" value=""/>
                    </label>
                </div>
            </div>
            <h2>Detalhes do pagamento</h2>
            <div class="fur">
                <label for="">
                    Descrição
                    <input name="" type="text" value=""/>
                </label>
                <label for="">
                    Conta
                    <input name="" type="text" value=""/>
                </label>
            </div>

            <div class="fur">
                <label for="">
                    Emissão
                    <input name="" type="text" value=""/>
                </label>
                <label for="">
                    Vencimento
                    <input name="" type="text" value=""/>
                </label>
                <label for="">
                    Categoria
                    <input name="" type="text" value=""/>
                </label>
            </div>

            <div class="fur">
                <label for="">
                    Valor
                    <input name="" type="text" value=""/>
                </label>
                <label for="">
                    Vencimento
                    <input name="" type="text" value=""/>
                </label>
                <label for="">
                    Número de parcelas
                    <input name="" type="text" value=""/>
                </label>
            </div>

            <div class="fur">
                <button type="submit">Realizar pagamento</button>
            </div>
        </form>
        </div>

    </div>

</body>
</html>
