<?php
/**
 * Created by PhpStorm.
 * User: Bianca
 * Date: 14/08/2018
 * Time: 12:41
 */

class Restaurante
{
    private $hora_inicio;
    private $hora_fim;
    private $cardapio;
    private $nome;
    private $endereco;
    private $valor;
    private $id_restaurante;

    /**
     * Restaurante constructor.
     * @param $hora_inicio
     * @param $hora_fim
     * @param $cardapio
     * @param $nome
     * @param $endereco
     * @param $valor
     */
    public function __construct($hora_inicio, $hora_fim, $cardapio, $nome, $endereco, $valor, $id_restaurante=null)
    {
        $this->hora_inicio    = $hora_inicio;
        $this->hora_fim       = $hora_fim;
        $this->cardapio       = $cardapio;
        $this->nome           = $nome;
        $this->endereco       = $endereco;
        $this->valor          = $valor;
        $this->id_restaurante = $id_restaurante;
    }

    /**
     * @return mixed
     */
    public function getHoraInicio()
    {
        return $this->hora_inicio;
    }

    /**
     * @param mixed $hora_inicio
     */
    public function setHoraInicio($hora_inicio)
    {
        $this->hora_inicio = $hora_inicio;
    }

    /**
     * @return mixed
     */
    public function getHoraFim()
    {
        return $this->hora_fim;
    }

    /**
     * @param mixed $hora_fim
     */
    public function setHoraFim($hora_fim)
    {
        $this->hora_fim = $hora_fim;
    }

    /**
     * @return mixed
     */
    public function getCardapio()
    {
        return $this->cardapio;
    }

    /**
     * @param mixed $cardapio
     */
    public function setCardapio($cardapio)
    {
        $this->cardapio = $cardapio;
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
     * @return null
     */
    public function getIdRestaurante()
    {
        return $this->id_restaurante;
    }

    /**
     * @param null $id_restaurante
     */
    public function setIdRestaurante($id_restaurante)
    {
        $this->id_restaurante = $id_restaurante;
    }


}