<?php
require 'cabecalhoUsu.php';
?>


        <div class="column" id="content">
            <div class="ui grid">
                <div class="row perfil">
                    <h1 class="ui huge header">
                        Alterar dados pessoais
                    </h1>
                </div>
                <div class="ui divider"></div>
                <br>
                <div class="four column center aligned row" >
<!--                    <form class="ui form" method="post" action="../controllers/controladorUsuario.php?acao=update">-->
<!--                        <div class="field">-->
<!--                            <h4>Mudar email</h4>-->
<!--                            <div class="two fields">-->
<!--                                <div class="field">-->
<!--                                    <input type="text" name="email1" placeholder="Email atual">-->
<!--                                </div>-->
<!--                                <div class="field">-->
<!--                                    <input type="text" name="email3" placeholder="Novo email">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <a class="item"><button type="submit" name="gravar" id="aviso" class="ui fluid large teal button">Alterar</button></a>-->
<!--                        </div>-->
<!--                    </form>-->

                    <form class="ui large form" method="post" action="../controllers/controladorUsuario.php?acao=update">

                    <div class="ui stacked segment">

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



                        <br>

                        <!--                <input type="submit" name="gravar" class="ui fluid large teal button" value="Cadastrar"/>-->
                        <a class="item"><button type="submit" name="gravar" id="aviso" class="ui fluid large teal button">Atualizar</button></a>

                        <!--                <div class="ui fluid large teal submit  >Crie sua conta</div>-->
                    </div>

                    <div class="ui error message"></div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

</body>
<footer>
    <script src="/static/javascripts/ga.js"></script>
    <script src="/static/javascripts/growingio.js"></script>
</footer>
</html>