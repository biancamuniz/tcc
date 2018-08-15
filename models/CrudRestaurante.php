<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 06/06/18
 * Time: 14:41
 */

require_once 'DBConnection.php';
require_once 'Restaurante.php';

class CrudRestaurante
{

    private $conexao;

    public function getRestaurantes()
    {

        $this->conexao = DBConnection::getConexao();

        $sql = 'select * from restaurante';
        $resultado = $this->conexao->query($sql);
        $restaurantes = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $listaRestaurantes = [];
        foreach ($restaurantes as $restaurante) {
            $listaRestaurantes[] = new Restaurante($restaurante['hora_inicio'], $restaurante['hora_fim'], $restaurante['cardapio'], $restaurante['nome'], $restaurante['endereco'], $restaurante['valor'], $restaurante['id_usuario']);
        }
        return $listaRestaurantes;
    }

    public function getRestaurante(int $id_restaurante){
        //recebe um $id inteiro e retorna o objeto categoria correspondente
        //faz a conexao
        $this->conexao = DBConnection::getConexao();
        //criando a consulta
        $sql = "select * from restaurante where id_restaurante = ".$id_restaurante;
        //executa a consulta, usando a conexao
        $result = $this->conexao->query($sql);
        //transformar o resultado em um array
        $categoria = $result->fetch(PDO::FETCH_ASSOC);
        //instanciar um tipo categoria com os valores recebidos
        $objrest = new Restaurante($restaurante['hora_inicio'], $restaurante['hora_fim'], $restaurante['cardapio'], $restaurante['nome'], $restaurante['endereco'], $restaurante['valor'], $restaurante['id_usuario']);
        //retorna o objeto categoria criado
        return $objrest;
    }

    public function insertRestaurante(Restaurante $restaurante)
    {
        //recebe um objeto $cat e insere na tabela categoria do Bd
        $this->conexao = DBConnection::getConexao();
        $sql = "INSERT INTO restaurante (hora_inicio, hora_fim, cardapio, nome, endereco, valor) VALUES('{$restaurante->getHoraInicio()}','{$restaurante->getHoraFim()}','{$restaurante->getCardapio()}','{$restaurante->getNome()}','{$restaurante->getEndereco()}','{$restaurante->getValor()}')";

        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function updateRestaurante(Restaurante $restaurante){
        $this->conexao = DBConnection::getConexao();
        $sql = "update restaurante set hora_inicio = '".$restaurante->getHoraInicio()."', hora_fim = '".$restaurante->getHoraFim()."', cardapio = '".$restaurante->getCardapio()."', nome = '".$restaurante->getNome()."', endereco = '".$restaurante->getEndereco()."', valor = '".$restaurante->getValor()."' where id_restaurante = ".$restaurante->getIdRestaurante();
        echo $sql;
        try {
            $resultado = $this->conexao->exec($sql);
            return $resultado;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function deleteRestaurante(int $id_restaurante){
        $this->conexao = DBConnection::getConexao();
        $sql = "delete from restaurante where id_restaurante = ".$id_restaurante;
        try {
            $resultado = $this->conexao->exec($sql);
            return $resultado;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}