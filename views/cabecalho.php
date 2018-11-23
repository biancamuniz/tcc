<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8">
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


    <title> HOME </title>

</head>
<body>

<div class="ui center aligned container">

    <div class="ui fixed secondary menu">


        <div class="item image"> <img src="../imagens/logo.png"> </div>
        <h3 class="center aligned title">GUIA PARA MOCHILEIROS</h3>
        <br>



        <div class="right menu">

            <a class="item" href="index.php"> HOME </a>


            <div class="ui simple dropdown item">

                <div class="text">DESTINOS</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="ui item" data-value="europa" id="1"> <a href="../views/continente.php">EUROPA</a> </div>
                    <div class="ui item" data-value="america" id="2"> <a href="continente.php">AMÉRICA</a> </div>
                    <div class="ui item" data-value="asia" id="3"> <a href="continente.php">ÁSIA</a> </div>
                    <div class="item" data-value="africa" id="4"> <a href="continente.php">ÁFRICA</a> </div>
                    <div class="item" data-value="oceania" id="5"> <a href="continente.php">OCEANIA</a> </div>
                    <div class="item" data-value="antartida" id="6"> <a href="continente.php">ANTÁRTIDA</a> </div>

                </div>
<!--                <i class="dropdown icon"></i>-->
<!--                <div class="menu">-->
<!---->
<!--                    <div class="item">-->
<!--                        <a href="continente.php">África</a>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <a href="continente.php">América</a>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <a href="continente.php">Ásia</a>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <a href="continente.php">Europa</a>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <a href="continente.php">Oceania</a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>

            <a class="item">DICAS</a>
            <a class="item">CONTATE-NOS</a>

            <a href="controladorLogin.php" class="item"><button class="ui teal button">Entrar</button> </a>
<!--            <a href="../controllers/controladorLogin.php?acao=logout" class="item"><button class="ui teal button">Sair</button></a>-->
        </div>
    </div>
</div>