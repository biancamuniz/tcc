<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=1300, initial-scale=1 user-scalable=yes" name="viewport" />
    <meta content="Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI." name="description" />
    <meta content="Semantic-UI, Theme, Design, Template" name="keywords" />
    <meta content="PPType" name="author" />
    <link href="/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" />
    <link href="/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" />
    <link href="/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" />
    <link href="/manifest.json" rel="manifest" />
    <link color="#5bbad5" href="/safari-pinned-tab.svg" rel="mask-icon" />
    <meta content="#ffffff" name="theme-color" />
    <title>Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI.</title>

    <script src="/static/dist/jquery/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../semantic/semantic.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../semantic/semantic.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#select')
                .dropdown()
            ;
        })
    </script>
</head>
<body class="template">
<div class="ui center aligned container">

    <div class="ui fixed secondary menu">

        <div class="item image"> <img src="../imagens/logo.png"> </div>



        <div class="right menu">

            <a class="item" href="index.php"> HOME </a>


            <div class="ui simple dropdown item">

                <div class="text">DESTINOS</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="ui item" data-value="europa"> <a href="continente.php">EUROPA</a> </div>
                    <div class="ui item" data-value="america"> <a href="continente.php">AMÉRICA</a> </div>
                    <div class="ui item" data-value="asia"> <a href="continente.php">ÁSIA</a> </div>
                    <div class="item" data-value="africa"> <a href="continente.php">ÁFRICA</a> </div>
                    <div class="item" data-value="oceania"> <a href="continente.php">OCEANIA</a> </div>
                    <div class="item" data-value="antartida"> <a href="continente.php">ANTÁRTIDA</a> </div>

                </div>

            </div>

            <a class="item">DICAS</a>
            <a class="item">CONTATE-NOS</a>

            <a href="../controllers/controladorLogin.php?acao=sair" class="item"><button class="ui teal button">Sair</button> </a>
            <!--            <a href="../controllers/controladorLogin.php?acao=logout" class="item"><button class="ui teal button">Sair</button></a>-->
        </div>
    </div>
</div>
<div class="ui grid">
    <div class="row">
        <div class="column" id="sidebar">
            <div class="ui secondary vertical fluid menu">
                <img class="ui small centered circular image"  src="../imagens/hippie.png">
                <h2 id="welcome">Bem-vindx, Alexandra</h2>

                <div class="ui divider"></div>

                <div class="ui search">
                    <div class="ui icon input">
                        <input class="prompt" type="text" placeholder="Common passwords...">
                        <i class="search icon"></i>
                    </div>
                    <div class="results"></div>
                </div>

                <div class="ui hidden divider"></div>
                <a class="item" href="atualizar.php">Atualizar dados pessoais</a>
                <a class="item" href="perfil.php">Postagens</a>
                <a class="item" href="../controllers/controladorUsuario.php?acao=delete">Apagar conta</a>
                <a class="item">Another nav item</a>
                <a class="item">More navigation</a>
                <div class="ui hidden divider"></div>
                <a class="item">Macintosh</a><a class="item">Linux</a><a class="item">Windows</a>
            </div>
        </div>