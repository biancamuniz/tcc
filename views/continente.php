<?php

require ('cabecalho.php');
?>

    <div class="image principal"><img src="../imagens/continente.png" width="100%"> </div>

<div class="ui center aligned row principal"><p>O turismo na Europa é bastante diversificado. O continente oferece opções de destinos tanto para os amantes de história e cultura, como para quem quer admirar paisagens magníficas. Lá estão as metrópoles mais charmosas do planeta: Paris, Londres, Lisboa, Roma, Madri, Barcelona, entre outras tantas, que guardam infindáveis atrações turísticas que representam o berço da civilização ocidental. Já no interior, campos de flores, vinícolas, colinas, fiordes e lagos, dividem espaço com impressionantes castelos, formando cenários idílicos. Não obstante, o Leste Europeu vem despertando cada vez mais os olhos do turismo, consagrando a Europa, por completo, como o continente mais visitado do mundo.</p> </div>

<div class = "ui center aligned grid">

    <div class="ui row">


        <?php foreach ($paises as $pais): ?>
        <div class="three wide column">
            <div class="ui medium image">
                <img src="../imagens/alemanha.jpg">
                <h3> Alemanha </h3>
                <a class="item" href="pais.php"><button class="ui teal button">Mais</button></a>
            </div>
        </div>
        <?php endforeach; ?>


        <div class="three wide column">

            <div class="ui medium image">

                <img src="../imagens/franca.jpg">
                <h3> França </h3>
                <a class="item"><button class="ui teal button">Mais</button></a>

            </div>

        </div>

        <div class="three wide column">

            <div class="ui medium image">

                <img src="../imagens/espanha.jpg">
                <h3> Espanha </h3>
                <a class="item"><button class="ui teal button">Mais</button></a>

            </div>

        </div>

        <div class="three wide column">

            <div class="ui medium image">

                <img src="../imagens/grecia.jpg">
                <h3> Grécia </h3>
                <a class="item"><button class="ui teal button">Mais</button></a>

            </div>
        </div>
        <div class="three wide column">

            <div class="ui medium image">

                <img src="../imagens/england.jpg">
                <h3> Inglaterra </h3>
                <a class="item" href="pais.php"><button class="ui teal button">Mais</button></a>

            </div>
        </div>
    </div>
</div>

<br><br><br><br>

<div class = "ui center aligned grid">

    <div class="ui row">

        <div class="three wide column">

            <div class="ui medium image">
                <img src="../imagens/irlanda.jpg">
                <h3> Irlanda </h3>
                <a class="item"><button class="ui teal button">Mais</button></a>
            </div>

        </div>
        <div class="three wide column">

            <div class="ui medium image">

                <img src="../imagens/italia.jpg">
                <h3> Itália </h3>
                <a class="item"><button class="ui teal button">Mais</button></a>

            </div>

        </div>

        <div class="three wide column">

            <div class="ui medium image">

                <img src="../imagens/noruega.jpg">
                <h3> Noruega </h3>
                <a class="item"><button class="ui teal button">Mais</button></a>

            </div>

        </div>

        <div class="three wide column">

            <div class="ui medium image">

                <img src="../imagens/portugal.jpg">
                <h3> Portugal </h3>
                <a class="item"><button class="ui teal button">Mais</button></a>

            </div>
        </div>
        <div class="three wide column">

            <div class="ui medium image">

                <img src="../imagens/suica.jpg">
                <h3> Suíça </h3>
                <a class="item"><button class="ui teal button">Mais</button></a>

            </div>
        </div>
    </div>
</div>
<div class="ui row image">
    <button class="ui teal button">Veja mais</button>
</div>

<div class="ui vertical inverted center aligned footer segment">
    <img src="../imagens/logo.png" class="ui centered mini image">
    <div class="ui horizontal small divided link list">
        <a class="item" href="#">Site Map</a>
        <a class="item" href="#">Contact Us</a>
        <a class="item" href="#">Terms and Conditions</a>
        <a class="item" href="#">Privacy Policy</a>
    </div>
    <br><br>
</div>


</body>

</html>