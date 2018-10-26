<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 08/06/18
 * Time: 16:19
 */

require_once "../models/Usuario.php";
require_once "../models/CrudUsuario.php";


if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}


switch ($acao){

    case 'index';
        $crud = new CrudUsuario();
        $usuarios = $crud->getUsuarios();
        include '../views/cabecalho.php';
        include '../views/index.php';
        //include '../views/rodape.php';
        break;

    case 'cadastrar';

        if(!isset($_POST['gravar'])){ // ainda não digitou
            include '../views/cabecalho.php';
            include '../views/cadastro.php';
            //include '../views/rodape.php';
        }else{ // já digitou e devo gravar
            $nome     = $_POST['nome'];
            $email    = $_POST['email'];
            $senha    = $_POST['senha'];
            $data_nascimento = $_POST['data_nascimento'];
            $tipo_user = null;

            $usu = new Usuario($nome, $email, $senha, $data_nascimento, $tipo_user);
            $crud = new CrudUsuario();
            $res = $crud->insertUsuario($usu);
            header('location: ../views/index.php');
        }
        break;

    case 'exibir';
        $id = $_GET['id_usuario'];
        $crud = new CrudUsuario();
        $categoria = $crud->getUsuario('$id_usuario');
        include '../views/cabecalho.php';
        //include '../views/exibir.php';
        break;

    case 'update':
        $crud = new CrudUsuario();
        if (isset($_POST['gravar'])){
            $id              = $_POST['id_usuario'];
            $nome            = $_POST['nome'];
            $email           = $_POST['email'];
            $senha           = $_POST['senha'];
            $data_nascimento = $_POST['data_nascimento'];
            $tipo_user       = null;

            $newUsu = new Usuario($nome, $email, $senha, $data_nascimento, $tipo_user);
            $res = $crud->updateUsuario($newUsu);
            echo $res;
            header('Location: ../views/perfil.php');
        }else{
            $cat = $crud->getUsuario($_GET['id']);
           include '../views/atualizar.php';
        }
        break;

    case 'delete':
        $crud = new CrudUsuario();
        $res = $crud->deleteUsuario($_GET['id']);
        header('Location: index.php');
        break;

    default:
        echo 'Ação inválida';
}

