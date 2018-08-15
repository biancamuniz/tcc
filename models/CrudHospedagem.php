<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 06/06/18
 * Time: 14:41
 */

require_once 'DBConnection.php';
require_once 'Hospedagem.php';

class CrudHospedagem
{

    private $conexao;

    public function getHospedagens()
    {

        $this->conexao = DBConnection::getConexao();

        $sql = 'select * from hospedagem';
        $resultado = $this->conexao->query($sql);
        $hospedagens = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $listaHospedagens = [];
        foreach ($hospedagens as $hospedagem) {
            $listaRestaurantes[] = new Restaurante($hospedagem['tipo_hospedagem'], $hospedagem['site'], $hospedagem['nome'], $hospedagem['valor'], $hospedagem['endereco'], $hospedagem['id_hospedagem']);
        }
        return $listaHospedagens;
    }

    public function getHospedagem(int $id_hospedagem){
        //recebe um $id inteiro e retorna o objeto categoria correspondente
        //faz a conexao
        $this->conexao = DBConnection::getConexao();
        //criando a consulta
        $sql = "select * from hospedagem where id_hospedagem = ".$id_hospedagem;
        //executa a consulta, usando a conexao
        $result = $this->conexao->query($sql);
        //transformar o resultado em um array
        $categoria = $result->fetch(PDO::FETCH_ASSOC);
        //instanciar um tipo categoria com os valores recebidos
        $objhosp = new Hospedagem($hospedagem['tipo_hospedagem'], $hospedagem['site'], $hospedagem['nome'], $hospedagem['valor'], $hospedagem['endereco'], $hospedagem['id_hospedagem']);
        //retorna o objeto categoria criado
        return $objhosp;
    }

    public function insertHospedagem(Hospedagem $hospedagem)
    {
        //recebe um objeto $cat e insere na tabela categoria do Bd
        $this->conexao = DBConnection::getConexao();
        $sql = "INSERT INTO hospedagem (tipo_hospedagem, site, nome, valor, endereco) VALUES('{$hospedagem->getTipoHospedagem()}','{$hospedagem->getSite()}','{$hospedagem->getNome()}','{$hospedagem->getValor()}','{$hospedagem->getEndereco()}')";

        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function updateHospedagem(Hospedagem $hospedagem){
        $this->conexao = DBConnection::getConexao();
        $sql = "update hospedagem set tipo_hospedagem = '".$hospedagem->getTipoHospedagem()."', site = '".$hospedagem->getSite()."', nome = '".$hospedagem->getNome()."', valor = '".$hospedagem->getValor()."', endereco = '".$hospedagem->getEndereco()."', id_hospedagem = '".$hospedagem->getIdHospedagem();
        echo $sql;
        try {
            $resultado = $this->conexao->exec($sql);
            return $resultado;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function deleteHospedagem(int $id_hospedagem){
        $this->conexao = DBConnection::getConexao();
        $sql = "delete from hospedagem where id_hospedagem = ".$id_hospedagem;
        try {
            $resultado = $this->conexao->exec($sql);
            return $resultado;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}