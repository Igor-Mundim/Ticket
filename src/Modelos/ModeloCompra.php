<?php

namespace Ticket\Modelos;

use Ticket\Entidades\Compra;
use Ticket\Entidades\Usuario;
use Ticket\Util\Conexao;
use Ticket\Entidades\Produto;

use PDO;

class ModeloCompra {
    private static $n;
    function __construct() {
        
    }


    function cadastrar(Compra $compra) {

        try {
            $sql = 'insert into compra (idusuario, qrcode, idingresso) values(:idusuario, :qrcode, :idingresso)';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(':idusuario',$compra->getIdusuario());
            $p_sql->bindValue(':qrcode',$compra->getQrcode());
            $p_sql->bindValue(':idingresso',$compra->getIdingresso());
            if ($p_sql->execute()) {
                return Conexao::getInstancia()->lastInsertId();

            }
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }

}
