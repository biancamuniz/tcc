<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 06/06/18
 * Time: 14:41
 */

require_once 'DBConnection.php';
require_once 'Pais.php';

class CrudHospedagem
{

    private $conexao;

    public function getPaises()
    {

        $this->conexao = DBConnection::getConexao();

        $sql = 'select * from paises';
        $resultado = $this->conexao->query($sql);
        $hospedagens = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $listaPaises = [];
        foreach ($paises as $pais) {
            $listaPaises[] = new Pais($pais['nome'], $pais['id_continente'], $pais['id_pais']);
        }
        return $listaPaises;
    }

    public function getPais(int $id_pais){
        //recebe um $id inteiro e retorna o objeto categoria correspondente
        //faz a conexao
        $this->conexao = DBConnection::getConexao();
        //criando a consulta
        $sql = "select * from pais where id_pais = ".$id_pais;
        //executa a consulta, usando a conexao
        $result = $this->conexao->query($sql);
        //transformar o resultado em um array
        $categoria = $result->fetch(PDO::FETCH_ASSOC);
        //instanciar um tipo categoria com os valores recebidos
        $objpais = new Pais($pais['nome'], $pais['id_continente'], $pais['id_pais']);
        //retorna o objeto categoria criado
        return $objpais;
    }

    public function insertPais(Pais $pais)
    {
        //recebe um objeto $cat e insere na tabela categoria do Bd
        $this->conexao = DBConnection::getConexao();
        $sql = "INSERT INTO pais (nome, id_continente) VALUES('{$pais->getNome()}','{$pais->getIdContinente()}')";

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