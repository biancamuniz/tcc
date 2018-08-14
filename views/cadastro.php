<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../semantic/semantic.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style type="text/css" href="../css/style.css">
        body {
            background-image: url('../imagens/3.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
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

        <form class="ui large form" method="post" action="../controllers/controladorUsuario.php?acao=cadastrar">

            <div class="ui stacked segment">
                <h2 class="ui teal image header">
                    <img src="../imagens/logo.png" class="image">
                    <div class="content">
                        Crie uma conta
                    </div>
                </h2>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="nome" placeholder="Nome completo">
                    </div>
                </div>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="date icon"></i>
                        <input type="date" name="data_nascimento">
                    </div>
                </div>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="at icon"></i>
                        <input type="text" name="email" placeholder="E-mail">
                    </div>
                </div>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                </div>

                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" name="example">
                        <label>Ao criar sua conta, você está aceitando os <a href="#">termos de serviço</a> e a <a href="#">política de privacidade</a> do site</label>
                    </div>
                </div>

                <br>

                <input type="submit" name="gravar" class="ui fluid large teal button" value="Cadastrar"/>

<!--                <div class="ui fluid large teal submit  >Crie sua conta</div>-->
            </div>

            <div class="ui error message"></div>

        </form>

        <div class="ui message">
            Já possui uma conta? <a href="login.php">Entre</a>
            <br>
        </div>
    </div>
</div>



</body>
</html>