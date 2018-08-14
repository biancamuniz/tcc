<?php

require ('cabecalho.php');

?>
<script>
    $(document).ready(function () {
        $(".item button").click(function () {
            var idBotao = $(this).attr('id');
            $('.ui.modal.'+idBotao).modal('show');
            ;
        });

        $('.ui.rating')
            .rating()
        ;
    })
</script>

<div class="image"><img src="../imagens/cidade.png" width="100%"></div>

<div class="ui center aligned row principal"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea expedita hic nobis quidem repellat sit! Eos esse explicabo harum impedit ipsam porro quae quod veniam? Animi cumque praesentium veritatis vero? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur ea expedita inventore, nesciunt sed tenetur. Ad adipisci amet consequuntur earum error exercitationem laudantium nobis odio optio pariatur, qui vitae.  </p> </div>

<div class = "ui center aligned grid">

    <div class="ui row">

        <div class="five wide column">

            <div class="ui medium image">
                <img src="../imagens/alimentacao.jpg">
                <h3> Alimentação </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque blanditiis commodi eos harum illum itaque, minus molestiae quaerat quasi qui quo, quos saepe sit sunt temporibus vitae voluptas voluptate.</p>
                <a class="item"><button id="alimentacao" class="ui teal button">Custos e locais</button></a>
            </div>

        </div>
        <div class="five wide column">

            <div class="ui medium image">

                <img src="../imagens/transporte.jpg">
                <h3> Transporte </h3>
                <p>Lorem ipsu m dolor sit amet, consectetur adipisicing elit. Aspernatur atque blanditiis commodi eos harum illum itaque, minus molestiae quaerat quasi qui quo, quos saepe sit sunt temporibus vitae voluptas voluptate.</p>
                <a class="item"><button id="transporte" class="ui teal button">Custos e locais</button></a>

            </div>

        </div>

        <div class="five wide column">

            <div class="ui medium image">

                <img src="../imagens/hospedagem.jpg">
                <h3> Hospedagem </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque blanditiis commodi eos harum illum itaque, minus molestiae quaerat quasi qui quo, quos saepe sit sunt temporibus vitae voluptas voluptate.</p>
                <a class="item"><button id="hospedagem" class="ui teal button">Custos e locais</button></a>

            </div>
    <br>
        </div>

    </div>
</div>

<div class="image"><img src="../imagens/informacoes.png" width="100%"></div>

<div class="ui row">
    <br><br>
    <div class="row">
        <div class="ui titulo ponto "><h1>Pontos Turísticos</h1></div>
        <div class="ui category search">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Pontos turísticos">
                <i class="search icon"></i>
            </div>
            <div class="results"></div>
        </div>
    </div>

    <div class="row">
        <img class="ui medium left floated image margem-inferior-zero" src="../imagens/brighton.jpg">
        <br><br>
        <h2>Píer de Brighton</h2>
        <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque. Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
        <h3>Valor da entrada: £...</h3>
        <br><br>
    </div>

    <div class="row">
        <img class="ui medium left floated image margem-inferior-zero" src="../imagens/brighton.jpg">
        <br><br>
        <h2>Royal Pavilion</h2>
        <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque. Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
        <h3>Valor da entrada: £...</h3>
        <br><br>
    </div>
    <img class="ui medium left floated image margem-inferior-zero" src="../imagens/brighton.jpg">
    <br><br>
    <h2>Museu de Brighton e Galeria de Arte</h2>
    <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque. Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
    <h3>Valor da entrada: £...</h3>
    <br><br>

    <img class="ui medium left floated image margem-inferior-zero" src="../imagens/brighton.jpg">
    <br><br>
    <h2>Brighton Marina</h2>
    <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque. Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
    <h3>Valor da entrada: £...</h3>
    <br><br>

    <img class="ui medium left floated image" src="../imagens/brighton.jpg">
    <br><br>
    <h2>Brighton Toy and Model Museum</h2>
    <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque. Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
    <h3>Valor da entrada: £...</h3>
    <br><br>


</div>

<br><br>

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

<div class="ui modal alimentacao">
    <i class="close icon"></i>
    <div class="header inline">
       LOCAIS E CUSTOS
    </div>

    <div class="ui divided items">

        <div class="item modal">
            <div class="ui small circular image">
                <img src="../imagens/mc.jpg">
            </div>
            <div class="content">
                <a class="header">McDonald's</a>
                <div class="meta">
                    <span class="cinema">Endereço: Brighton Marina Leisure Centre, The Boardwalk </span> <br>
                    <span class="cinema">Horário: Aberto 24h </span> <br>
                    <span class="cinema">Cardápio: <a href="https://www.mcdonalds.com/gb/en-gb/menu.html">mcdonalds.co.uk</a> </span>
                </div>
                <div class="extra">
                    <div class="ui label alimentacao"><div class="ui star rating" data-rating="3" data-max-rating="5"></div></div>

                </div>
            </div>
        </div>

        <div class="ui footer">

        </div>

    </div>

</div>

<div class="ui modal transporte">
    <i class="close icon"></i>
    <div class="header">
        TRANSPORTE
    </div>
    <div class="image content">
        <div class="ui medium image">
            <img src="/images/avatar/large/chris.jpg">
        </div>
        <div class="description">
            <div class="ui header">Transporte</div>
            <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
            <p>Is it okay to use this photo?</p>
        </div>
    </div>
    <div class="actions">
        <div class="ui black deny button">
            Nope
        </div>
        <div class="ui positive right labeled icon button">
            Yep, that's me
            <i class="checkmark icon"></i>
        </div>
    </div>
</div>

<div class="ui modal hospedagem">
    <i class="close icon"></i>
    <div class="header">
        HOSPEDAGEM
    </div>
    <div class="image content">
        <div class="ui medium image">
            <img src="/images/avatar/large/chris.jpg">
        </div>
        <div class="description">
            <div class="ui header">Hospedagem.</div>
            <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
            <p>Is it okay to use this photo?</p>
        </div>
    </div>
    <div class="actions">
        <div class="ui black deny button">
            Nope
        </div>
        <div class="ui positive right labeled icon button">
            Yep, that's me
            <i class="checkmark icon"></i>
        </div>
    </div>
</div>
</body>

</html>