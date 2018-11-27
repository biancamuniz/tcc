<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 06/06/18
 * Time: 14:41
 */

require_once 'DBConnection.php';
require_once 'Restaurante.php';

class CrudTransporte
{

    private $conexao;

    public function getTransportes()
    {

        $this->conexao = DBConnection::getConexao();

        $sql = 'select * from transporte';
        $resultado = $this->conexao->query($sql);
        $transportes = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $listaTransportes = [];
        foreach ($transportes as $transporte) {
            $listaTransportes[] = new Transporte($transporte['tipo_transporte'], $transporte['nome'], $transporte['valor'], $transporte['id_transporte']);
        }
        return $listaTransportes;
    }

    public function getTransporte(int $id_transporte){
        //recebe um $id inteiro e retorna o objeto categoria correspondente
        //faz a conexao
        $this->conexao = DBConnection::getConexao();
        //criando a consulta
        $sql = "select * from transporte where id_transporte = ".$id_transporte;
        //executa a consulta, usando a conexao
        $result = $this->conexao->query($sql);
        //transformar o resultado em um array
        $transporte = $result->fetch(PDO::FETCH_ASSOC);
        //instanciar um tipo categoria com os valores recebidos
        $objtransp = new Transporte($transporte['tipo_transporte'], $transporte['nome'], $transporte['valor'], $transporte['id_transporte']);
        //retorna o objeto categoria criado
        return $objtransp;
    }

    public function insertTransporte(Transporte $transporte)
    {
        //recebe um objeto $cat e insere na tabela categoria do Bd
        $this->conexao = DBConnection::getConexao();
        $sql = "INSERT INTO transporte (tipo_transporte, nome, valor) VALUES('{$transporte->getTipoTransporte()}','{$transporte->getNome()}','{$transporte->getValor()}')";

        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function updateTransporte(Transporte $transporte){
        $this->conexao = DBConnection::getConexao();
        $sql = "update transporte set tipo_transporte = '".$transporte->getTipoTransporte()."', nome = '".$transporte->getNome()."', valor = '".$transporte->getValor()."' where id_transporte = ".$transporte->getIdTransporte();
        echo $sql;
        try {
            $resultado = $this->conexao->exec($sql);
            return $resultado;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function deleteTransporte(int $id_transporte){
        $this->conexao = DBConnection::getConexao();
        $sql = "delete from transporte where id_transporte = ".$id_transporte;
        try {
            $resultado = $this->conexao->exec($sql);
            return $resultado;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}