<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/18
 * Time: 15:31
 */

namespace Ticket\Entidades;


class Compra
{
    private $id;
    private $idusuario;
    private  $qrcode;
    private $idingresso;

    /**
     * Compra constructor.
     * @param $idusuario
     * @param $qrcode
     * @param $idingresso
     */
    public function __construct($idusuario, $qrcode, $idingresso)
    {
        $this->idusuario = $idusuario;
        $this->qrcode = $qrcode;
        $this->idingresso = $idingresso;
    }

    /**
     * @return mixed
     */
    public function getIdingresso()
    {
        return $this->idingresso;
    }

    /**
     * @param mixed $idingresso
     */
    public function setIdingresso($idingresso)
    {
        $this->idingresso = $idingresso;
    }

    /**
     * Compra constructor.
     * @param $idusuario
     * @param $qrcode
     */


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
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * @param mixed $idusuario
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }

    /**
     * @return mixed
     */
    public function getQrcode()
    {
        return $this->qrcode;
    }

    /**
     * @param mixed $qrcode
     */
    public function setQrcode($qrcode)
    {
        $this->qrcode = $qrcode;
    }

}