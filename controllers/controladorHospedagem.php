<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 08/06/18
 * Time: 16:19
 */

require_once "../models/Hospedagem.php";
require_once "../models/CrudHospedagem.php";


if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}


switch ($acao){

    case 'index';
        $crud = new CrudHospedagem();
        $usuarios = $crud->getHospedagens();
        include '../views/cabecalho.php';
        include '../views/index.php';
        //include '../views/rodape.php';
        break;

    case 'cadastrar';

        if(!isset($_POST['gravar'])){ // ainda não digitou
            include '../views/cabecalho.php';
            include '../views/cadastroHospedagem.php';
            //include '../views/rodape.php';
        }else{ // já digitou e devo gravar
            $tipo_hospedagem = $_POST['tipo_hospedagem'];
            $site            = $_POST['site'];
            $nome            = $_POST['nome'];
            $valor           = $_POST['valor'];
            $endereco        = $_POST['endereco'];

            $hosp = new Hospedagem($tipo_hospedagem, $site, $nome, $valor, $endereco);
            $crud = new CrudHospedagem();
            $res = $crud->insertHospedagem($hosp);
            header('location: ../views/cidade.php');
        }

        break;

    case 'exibir';

        $id = $_GET['id_hospedagem'];
        $crud = new CrudHospedagem();
        $categoria = $crud->getHospedagens('$id_hospedagem');
        include '../views/cabecalho.php';
        //include '../views/exibir.php';
        break;

    case 'update';

        $crud = new CrudHospedagem();
        if (isset($_POST['gravar'])){
            $tipo_hospedagem = $_POST['tipo_hospedagem'];
            $site            = $_POST['site'];
            $nome            = $_POST['nome'];
            $valor           = $_POST['valor'];
            $endereco        = $_POST['endereco'];

            $newHosp = new Hospedagem($tipo_hospedagem, $site, $nome, $valor, $endereco);
            $res = $crud->updateHospedagem($newHosp);
            echo $res;
            // CRIAR PÁGINA DE PERFIL header('Location: admin.php');
        }else{
            $cat = $crud->getHospedagem($_GET['id_hospedagem']);
            // CRIAR PÁGINA DE ATUALIZAR include '../views/atualizar.php';
        }
        break;

    case 'delete':
        $crud = new CrudHospedagem();
        $res = $crud->deleteHospedagem($_GET['id_hospedagem']);
        header('Location: index.php');
        break;

    default:
        echo 'Ação inválida';
}

