<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 08/06/18
 * Time: 16:19
 */

require_once "../models/Restaurante.php";
require_once "../models/CrudRestaurante.php";


if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}


switch ($acao){

    case 'index';
        $crud = new CrudRestaurante();
        $usuarios = $crud->getRestaurantes();
        include '../views/cabecalho.php';
        include '../views/index.php';
        //include '../views/rodape.php';
        break;

    case 'cadastrar';

        if(!isset($_POST['gravar'])){ // ainda não digitou
            include '../views/cabecalho.php';
            include '../views/cadastroRestaurante.php';
            //include '../views/rodape.php';
        }else{ // já digitou e devo gravar
            $hora_inicio = $_POST['hora_inicio'];
            $hora_fim    = $_POST['hora_fim'];
            $cardapio    = $_POST['cardapio'];
            $nome        = $_POST['nome'];
            $endereco    = $_POST['endereco'];
            $valor       = $_POST['valor'];

            $rest = new Restaurante($hora_inicio, $hora_fim, $cardapio, $nome, $endereco, $valor);
            $crud = new CrudRestaurante();
            $res = $crud->insertRestaurante($rest);
            header('location: ../views/cidade.php');
        }

        break;

    case 'exibir';

        $id = $_GET['id_restaurante'];
        $crud = new CrudRestaurante();
        $categoria = $crud->getRestaurante('$id_restaurante');
        include '../views/cabecalho.php';
        //include '../views/exibir.php';
        break;

    case 'update';

        $crud = new CrudRestaurante();
        if (isset($_POST['gravar'])){
            $id_restaurante  = $_POST['id_restaurante'];
            $hora_inicio     = $_POST['hora_inicio'];
            $hora_fim        = $_POST['hora_fim'];
            $cardapio        = $_POST['cardapio'];
            $nome            = $_POST['nome'];
            $endereco        = $_POST['endereco'];
            $valor           = $_POST['valor'];


            $newRest = new Restaurante($hora_inicio, $hora_fim, $cardapio, $nome, $endereco, $valor);
            $res = $crud->updateRestaurante($newRest);
            echo $res;
            // CRIAR PÁGINA DE PERFIL header('Location: admin.php');
        }else{
            $cat = $crud->getRestaurante($_GET['id_restaurante']);
            // CRIAR PÁGINA DE ATUALIZAR include '../views/atualizar.php';
        }
        break;

    case 'delete':
        $crud = new CrudRestaurante();
        $res = $crud->deleteRestaurante($_GET['id_restaurante']);
        header('Location: index.php');
        break;

    default:
        echo 'Ação inválida';
}

