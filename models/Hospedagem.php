<?php
/**
 * Created by PhpStorm.
 * User: Bianca
 * Date: 14/08/2018
 * Time: 12:41
 */

class Hospedagem
{
    private $tipo_hospedagem;
    private $site;
    private $nome;
    private $valor;
    private $endereco;
    private $id_hospedagem;

    /**
     * Hospedagem constructor.
     * @param $tipo_hospedagem
     * @param $site
     * @param $nome
     * @param $valor
     * @param $endereco
     * @param $id_hospedagem
     */
    public function __construct($tipo_hospedagem, $site, $nome, $valor, $endereco, $id_hospedagem=null)
    {
        $this->tipo_hospedagem = $tipo_hospedagem;
        $this->site = $site;
        $this->nome = $nome;
        $this->valor = $valor;
        $this->endereco = $endereco;
        $this->id_hospedagem = $id_hospedagem;
    }

    /**
     * @return mixed
     */
    public function getTipoHospedagem()
    {
        return $this->tipo_hospedagem;
    }

    /**
     * @param mixed $tipo_hospedagem
     */
    public function setTipoHospedagem($tipo_hospedagem)
    {
        $this->tipo_hospedagem = $tipo_hospedagem;
    }

    /**
     * @return mixed
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param mixed $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return null
     */
    public function getIdHospedagem()
    {
        return $this->id_hospedagem;
    }

    /**
     * @param null $id_hospedagem
     */
    public function setIdHospedagem($id_hospedagem)
    {
        $this->id_hospedagem = $id_hospedagem;
    }



}