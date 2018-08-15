<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../semantic/semantic.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style type="text/css" href="../css/style.css">
    body {
    background-image: url('../imagens/4.jpg');
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

        <form class="ui large form" method="post" action="../controllers/controladorRestaurante.php?acao=cadastrar">

            <div class="ui stacked segment">

                <h2 class="ui teal image header">
                    <img src="../imagens/logo.png" class="image">
                    <div class="content"> Cadastre </div>
                </h2>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="nome" placeholder="Nome do estabelecimento">
                    </div>
                </div>

                <div class="two fields">

                <div class="field">
                    <div class="ui left icon input">
                        <i class="time icon"></i>
                        <input type="time" name="hora_inicio" placeholder="Hora de abertura">
                    </div>
                </div>

                    <div class="field">
                        <div class="ui left icon input">
                            <i class="time icon"></i>
                            <input type="time" name="hora_fim" placeholder="Hora de abertura">
                        </div>
                    </div>

                </div>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="edit icon"></i>
                        <input type="text" name="cardapio" placeholder="Link do cardápio">
                    </div>
                </div>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="map marker alternate icon"></i>
                        <input type="text" name="endereco" placeholder="Endereço">
                    </div>
                </div>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="dollar sign icon"></i>
                        <input type="number" name="valor" placeholder="Valor gasto">
                    </div>
                </div>

                <br>

                <input type="submit" name="gravar" class="ui fluid large teal button" value="Cadastrar"/>

<!--                <div class="ui fluid large teal submit  >Crie sua conta</div>-->
            </div>

        </form>


    </div>
</div>



</body>
</html>