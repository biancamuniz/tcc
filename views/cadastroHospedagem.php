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

    <script>

        $(document).ready(function () {
            $('select.dropdown')
                .dropdown()
            ;
        }

    </script>

    <title>Document</title>
</head>
<body>

<div class="ui middle aligned center aligned grid">
    <div class="column">

        <form class="ui form" method="post" action="../controllers/controladorHospedagem.php?acao=cadastrar">

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

                 <div class="field">

                     <select class="ui search dropdown">
                            <option value="">Tipo de hospedagem</option>
                            <option value="tipo_hospedagem" name="tipo_hospedagem">Albergue</option>
                            <option name="tipo_hospedagem">Airbnb</option>
                            <option name="tipo_hospedagem">Campismo</option>
                            <option name="tipo_hospedagem">Couchsurfing</option>
                            <option name="tipo_hospedagem">Estalagem</option>
                            <option name="tipo_hospedagem">Hotel</option>
                            <option name="tipo_hospedagem">Hostel</option>
                            <option name="tipo_hospedagem">Pousada</option>
                            <option name="tipo_hospedagem">Resort</option>



                        </select>
                 </div>


                    <div class="field">
                        <div class="ui left icon input">
                            <i class="edit icon"></i>
                            <input type="text" name="site" placeholder="Site do lugar">
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
                        <input type="number" name="valor" placeholder="Valor da diária">
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