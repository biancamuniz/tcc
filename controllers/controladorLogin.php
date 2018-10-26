<?php
/**
 * Created by PhpStorm.
 * User: Bianca
 * Date: 13/08/2018
 * Time: 23:18
 */


require_once '../models/Login.php';

function logar(){
    include "../views/login.php";
}

function fazLogin($email, $senha){

    $login = new Login();
    $resultado = $login->logar($email, $senha);

    if ($resultado != false){
        session_start();
        $_SESSION['usuario'] = $resultado['nome'];
        $_SESSION['tipo_user'] = $resultado['tipo_user'] ;
        $_SESSION['esta_logado'] = true;

        header('location: ../views/perfil.php');

    }else {
        logar();
    }
}

function sair(){
    $login = new Login();
    $resultado = $login->logout();
}


if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}else {
    $acao = 'logar';
}

if ($acao == 'logar'){
    logar();
} elseif ($_GET['acao'] == 'fazLogin'){
    $res = fazLogin($_POST['email'], $_POST['senha']);
}

if ($acao == 'logar'){
    logar();
} elseif ($_GET['acao'] == 'sair'){
    $res = sair();
}

//
//if (isset($_GET['acao'])) {
//    $acao = $_GET['acao'];
//}else{
//    $acao = 'index';
//}
//
//if ($acao == 'fazLogin'){
//    $resultado = fazLogin($email, $senha);
//} elseif ($acao == 'logout'){
//    $resultado = sair();
//}

