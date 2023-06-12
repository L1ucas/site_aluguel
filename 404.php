<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Document</title>
        <link href="styles/style.css" rel="stylesheet"/>
    </head>
    <style type="text/css" media="screen">
     body {
         background-color: lightgray;
     }

     .con {
         display: flex;
         justify-content: center;
     }

     h1 {
         color: var(--darkgreen);
         text-align: center;
     }

    </style>

    <body>
        <?php include_once 'navbar.php';?>
        <div class="con">
            <div style="display: flex; flex-direction: row; background-color: white; justify-content: space-between; width: 60%">
                <div class="imagem">
                    <img src="./assets/plugue_desconectada.svg" alt="" />
                </div>
                <div class="texto">
                    <h1>404: Página não encontrada</h1>
                    <p>A página que você está procurando não existe ou algum erro aconteceu.
                    Volte para a página inicial.</p>
                </div>
            </div>

        </div>
    </body>
</html>
