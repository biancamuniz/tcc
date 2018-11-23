<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 23/11/18
 * Time: 09:15
 */


class Pais
{
    private $nome;
    private $id_continente;
    private $id_pais;

    /**
     * Pais constructor.
     * @param $id_pais
     * @param $nome
     * @param $id_continente
     */
    public function __construct($nome, $id_continente, $id_pais=null)
    {
        $this->nome = $nome;
        $this->id_continente = $id_continente;
        $this->id_pais = $id_pais;
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
    public function getIdContinente()
    {
        return $this->id_continente;
    }

    /**
     * @param mixed $id_continente
     */
    public function setIdContinente($id_continente)
    {
        $this->id_continente = $id_continente;
    }

    /**
     * @return null
     */
    public function getIdPais()
    {
        return $this->id_pais;
    }

    /**
     * @param null $id_pais
     */
    public function setIdPais($id_pais)
    {
        $this->id_pais = $id_pais;
    }




}

