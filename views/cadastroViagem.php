<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../semantic/semantic.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style type="text/css">
        body {
            background-color: #DADADA;
            margin-top: 30px;
        }

        .image {
            margin-top: 100px;
        }
        .column {
            max-width: 650px;
        }
    </style>

</head>
<body>

<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            <img src="../imagens/logo.png" class="image">
            <div class="content">
                Cadastre sua viagem
            </div>
        </h2>
        <form class="ui large form">
            <div class="ui stacked segment">

                <div class="field">
                    <div class="ui left icon input">
                        <i class="flag icon"></i>
                        <input type="text" name="pais" placeholder="País da viagem">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="flag icon"></i>
                        <input type="text" name="cidades" placeholder="Cidades onde passou">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="money icon"></i>
                        <input type="number" name="passagem" placeholder="Valor médio gasto com transporte">

                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="money icon"></i>
                        <input type="number" name="hospedagem" placeholder="Valor médio gasto com hospedagem">

                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                    <i class="money icon"></i>
                    <input type="number" name="alimentacao" placeholder="Valor médio gasto com alimentação">
                    </div>
                </div>

                    <div class="field">
                        <div class="ui left icon input">
                            <i class="money icon"></i>
                            <input type="number" name="alimentacao" placeholder="Valor médio gasto com alimentação">
                        </div>

                        <br><br>

                        <div class="field">
                            <div class="ui left icon input">
                                <i class="money icon"></i>
                                <input type="number" name="alimentacao" placeholder="Gasto médio total com a viagem">
                            </div>
                        </div>


                    <div class="field">
                        <textarea rows="2" placeholder="Compartilhe alguma dica"></textarea>
                    </div>
                    <div class="inline fields">
                        <label for="fruit">Categoria da dica:</label>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="fruit" tabindex="0" class="hidden">
                                <label>Alimentação</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="fruit" tabindex="0" class="hidden">
                                <label>Hospedagem</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="fruit" tabindex="0" class="hidden">
                                <label>Transporte</label>
                            </div>
                        </div>

                    </div>

            </div>

                <div class="ui fluid large teal submit button">Cadastrar viagem</div>
            </div>

            <div class="ui error message"></div>


        <div class="ui message">
            <a href="index.php">Voltar a página inicial</a>

        </div>
            </div>
        </form>
    </div>
</body>

</html>