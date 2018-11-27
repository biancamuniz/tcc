<?php
/**
 * Created by PhpStorm.
 * User: Bianca
 * Date: 14/08/2018
 * Time: 12:41
 */

class Transporte
{
    private $tipo_transporte;
    private $nome;
    private $valor;
    private $id_transporte;

    /**
     * Transporte constructor.
     * @param $tipo_transporte
     * @param $nome
     * @param $valor
     * @param $id_transporte
     */
    public function __construct($tipo_transporte, $nome, $valor, $id_transporte = null)
    {
        $this->tipo_transporte = $tipo_transporte;
        $this->nome = $nome;
        $this->valor = $valor;
        $this->id_transporte = $id_transporte;
    }

    /**
     * @return mixed
     */
    public function getTipoTransporte()
    {
        return $this->tipo_transporte;
    }

    /**
     * @param mixed $tipo_transporte
     */
    public function setTipoTransporte($tipo_transporte): void
    {
        $this->tipo_transporte = $tipo_transporte;
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
    public function setNome($nome): void
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
    public function setValor($valor): void
    {
        $this->valor = $valor;
    }

    /**
     * @return null
     */
    public function getIdTransporte()
    {
        return $this->id_transporte;
    }

    /**
     * @param null $id_transporte
     */
    public function setIdTransporte($id_transporte): void
    {
        $this->id_transporte = $id_transporte;
    }

}