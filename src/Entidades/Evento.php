<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 30/06/18
 * Time: 20:24
 */

namespace Ticket\Entidades;


class Evento
{
    private $id;
    private $nome;
    private $tipo;
    private $data;
    private $preco;
    private $quantidade;
    private $descricao;
    private $imagem;

    /**
     * Evento constructor.
     * @param $nome
     * @param $tipo
     * @param $data
     * @param $preco
     * @param $quantidade
     * @param $descricao
     * @param $imagem
     */
    public function __construct($nome, $tipo, $data, $preco, $quantidade, $descricao, $imagem)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->data = $data;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
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

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * @param mixed $imagem
     */
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }


}