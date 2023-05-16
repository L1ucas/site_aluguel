<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/login.css">
    <title>Login</title>
</head>
<body>
<?php include_once 'navbar.php'; ?>
    <main class="main_login">
        <form action="login_submit.php" method="post" class="form_login">
                <label for="" class="item">
                    Email: 
                    <input type="email" name="campo_email" id="campo_email">
                </label>
                <label for="" class="item">
                    Senha: 
                    <input type="password" name="campo_senha" id="campo_senha">
                </label>
                <label for="" class="item">
                    Confirme a senha: 
                    <input type="password" name="campo_senha_confirmar" id="campo_senha_confirmar">
                </label>
                <div class="item1">
                <button type="submit">Entrar</button>
                </div>

        </form>
    </main>
</body>
</html>