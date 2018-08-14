<?php
/**
 * Created by PhpStorm.
 * User: Bianca
 * Date: 13/08/2018
 * Time: 23:07
 */

require_once "DBConnection.php";
require_once 'Usuario.php';
session_start();

class Login
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = DBConnection::getConexao();
    }

    public function logar($email, $senha){

        $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

        try {
            return $this->conexao->query($sql)->fetch(PDO::FETCH_ASSOC);
        }catch (PDOException $erro){
            return $erro->getMessage();
        }
    }

    public function estaLogado(){
        if(!isset($_SESSION['logado'])){
            header('Location: ../views/index.php');
        }
    }

    public function tipoUser(){
        if ($tipo_user = 1){
            header('Location: ../views/admin.php');
        } else{
            header('Location: ../views/index.php');
        }
    }

    public function logout(){
        session_destroy();
        header('location: ../views/index.php');
    }


}