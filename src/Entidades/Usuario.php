<?php

namespace Ticket\Entidades;

class Usuario {
    
    private $id;
    private $nome;
    private $sobrenomo;
    private $email;
    private $senha;
    private $tipo;
    

    function __construct($nome, $sobrenome, $email,$senha, $tipo) {
        $this->nome = $nome;
        $this->sobrenomo = $sobrenome;
        $this->email = $email;
        $this->senha = $senha;
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getSobrenomo()
    {
        return $this->sobrenomo;
    }

    /**
     * @param mixed $sobrenomo
     */
    public function setSobrenomo($sobrenomo)
    {
        $this->sobrenomo = $sobrenomo;
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
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }


    
}
