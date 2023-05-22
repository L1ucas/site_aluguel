<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <?php include_once 'navbar.php'; ?>
    <main class="main_cadastro">
        <form action="cadastro_submit.php" method="post" class="form_cadastro">
                <label for="" class="item">
                    Nome:
                    <input type="text" name="campo_nome" id="campo_nome">
                </label>
                <label for="" class="item">
                    Email: 
                    <input type="email" name="campo_email" id="campo_email">
                </label>
                <label for="" class="item">
                    Confirme o email: 
                    <input type="email" name="campo_email_confirmar" id="campo_email_confirmar">
                </label>
                <label for="" class="item">
                    Senha: 
                    <input type="password" name="campo_senha" id="campo_senha">
                </label>
                <label for="" class="item">
                    Confirme a senha: 
                    <input type="password" name="campo_senha_confirmar" id="campo_senha_confirmar">
                </label>
                <label for="" class="item">
                    Eu sou:
                    <select name="campo_genero" id="campo_genero">
                        <option value="0">Selecione seu gênero...</option>
                        <option value="1">Homem transgênero</option>
                        <option value="2">Homem cisgênero</option>
                        <option value="3">Mulher transgênera</option>
                        <option value="4">Mulher cisgênera</option>
                        <option value="5">Panzerkampfwagen Sturmpanzer IV</option>
                        <option value="6">Outro</option>
                        <option value="7">Prefiro não dizer</option>
                    </select>
                </label>
                <div class="item" style="font-size: 0.5em" >
                    Por se cadastrar nesse site, você concorda com nossa <a href="https://www.youtube.com/watch?v=ilfYnhXD-bE">política de privacidade</a>
                </div>
                <div class="item1">
                <button type="submit">Cadastro</button>
                </div>

        </form>
    </main>
</body>

</html>