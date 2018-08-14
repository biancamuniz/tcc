<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../semantic/semantic.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style type="text/css">
        body {
            /*background-color: #DADADA;*/
            background-image: url('../imagens/2.jpg');
            background-size: 100%;
            background-repeat: space;
            background-size: cover;
        }
        body > .grid {
            height: 100%;
        }
        .image {
            margin-top: -100px;
        }
        .column {
            max-width: 450px;
        }
    </style>

    <title>Document</title>
</head>
<body>


<div class="ui middle aligned center aligned grid">
    <div class="column">

        <form class="ui large form" method="post" action="../controllers/controladorLogin.php?acao=fazLogin" >
            <div class="ui stacked segment">
                <h2 class="ui teal image header">
                    <img src="../imagens/logo.png" class="image">
                    <div class="content">
                        Acesse sua conta
                    </div>
                </h2>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="at icon"></i>
                        <input type="text" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                </div>
                <input type="submit" name="gravar" class="ui fluid large teal button" value="Enviar"/>
            </div>

            <div class="ui error message"></div>

        </form>

        <div class="ui message">
            Não possui uma conta?
            <a href="cadastro.php">Cadastre-se</a><br>
            <a href="index.php">Voltar à página inicial</a>

        </div>
    </div>
</div>

</body>
</html>