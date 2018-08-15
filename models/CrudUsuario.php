<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 06/06/18
 * Time: 14:41
 */

require_once 'DBConnection.php';
require_once 'Usuario.php';

class CrudUsuario
{

    private $conexao;

    public function getUsuarios()
    {

        $this->conexao = DBConnection::getConexao();

        $sql = 'select * from usuario';
        $resultado = $this->conexao->query($sql);
        $usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $listaUsuarios = [];
        foreach ($usuarios as $usuario) {
            $listaUsuarios[] = new Usuario($usuario['nome'], $usuario['email'], $usuario['data_nascimento'], $usuario['senha'], $usuario['id_usuario']);
        }
        return $listaUsuarios;
    }

    public function getUsuario(int $id_usuario){
        //recebe um $id inteiro e retorna o objeto categoria correspondente
        //faz a conexao
        $this->conexao = DBConnection::getConexao();
        //criando a consulta
        $sql = "select * from usuario where id_usuario = ".$id_usuario;
        //executa a consulta, usando a conexao
        $result = $this->conexao->query($sql);
        //transformar o resultado em um array
        $categoria = $result->fetch(PDO::FETCH_ASSOC);
        //instanciar um tipo categoria com os valores recebidos
        $objusu = new Usuario($usuario["nome"], $usuario["email"], $usuario["dataNasc"], $usuario["senha"], $usuario["id_usuario"]);
        //retorna o objeto categoria criado
        return $objusu;
    }

    public function insertUsuario(Usuario $usuario)
    {
        //recebe um objeto $cat e insere na tabela categoria do Bd
        $this->conexao = DBConnection::getConexao();
        $sql = "INSERT INTO usuario (nome, email, data_nascimento, senha ) VALUES('{$usuario->getNome()}','{$usuario->getEmail()}','{$usuario->getDataNascimento()}','{$usuario->getSenha()}')";

        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function updateUsuario(Usuario $usuario){
        $this->conexao = DBConnection::getConexao();
        $sql = "update usuario set nome = '".$usuario->getNome()."', email = '".$usuario->getEmail()."', data_nascimento = '".$usuario->getDataNascimento()."',senha = '".$usuario->getSenha()."' where id_usuario = ".$usuario->getIdUsuario();
        echo $sql;
        try {
            $resultado = $this->conexao->exec($sql);
            return $resultado;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function deleteUsuario(int $id_usuario){
        $this->conexao = DBConnection::getConexao();
        $sql = "delete from usuario where id_usuario = ".$id_usuario;
        try {
            $resultado = $this->conexao->exec($sql);
            return $resultado;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}