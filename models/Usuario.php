<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 06/06/18
 * Time: 14:36
 */

class Usuario
{
    private $nome;
    private $email;
    private $senha;
    private $data_nascimento;
    private $tipo_user;
    private $id_usuario;

    public function __construct($nome, $email, $senha, $data_nascimento, $tipo_user, $id_usuario=null){

        $this->nome            = $nome;
        $this->email           = $email;
        $this->senha           = $senha;
        $this->data_nascimento = $data_nascimento;
        $this->tipo_user       = $tipo_user;
        $this->id_usuario      = $id_usuario;
    }

    /**
     * @return null
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param null $id_usuario
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param mixed $data_nascimento
     */
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getTipoUser()
    {
        return $this->tipo_user;
    }

    /**
     * @param mixed $tipo_user
     */
    public function setTipoUser($tipo_user)
    {
        $this->tipo_user = $tipo_user;
    }

    }