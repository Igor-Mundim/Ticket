<?php

namespace Ticket\Modelos;

use Ticket\Entidades\Evento;
use Ticket\Util\Conexao;
use Ticket\Entidades\Produto;
use PDO;

class ModeloEvento {
    private static $n;
    function __construct() {
        
    }

    function listarTodos() {

        try {

            $sql = 'select * from eventos';

            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->execute();

            return $p_sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }
    function listarEvento() {

        try {
            
            $sql = 'select * from eventos where datahora > now() and quantidade > 0';

            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->execute();
           
            return $p_sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }
    function listarEventoPorTipo($tipo) {

        try {
            $sql = 'select * from eventos where tipo LIKE :tipo and datahora > now() and quantidade > 0';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(':tipo',$tipo);
            $p_sql->execute();

            return $p_sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }
    function buscarEvento($id) {

        try {

            $sql = 'select * from eventos WHERE id = :id';

            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(':id', $id);
            $p_sql->execute();

            return $p_sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }


    function cadastroUpdate(Evento $evento) {

        try {

            $sql = 'UPDATE eventos SET  quantidade = quantidade-:quantidade WHERE id = :id';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(':quantidade', $evento->getQuantidade());
            $p_sql->bindValue(':id', $evento->getId());
            $p_sql->execute();
             true;
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }

    }
    function  deletarEvento(Evento $evento){
        try {

            $sql = 'DELETE FROM eventos WHERE id = :id';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(':id', $evento->getId());
            return $p_sql->execute();

        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }
    function cadastrarEvento(Evento $evento) {

        try {
            $sql = 'insert into eventos (nome, tipo, datahora, preco, quantidade, descricao, imagem) values(:nome, :tipo, :datahora, :preco, :quantidade, :descricao,:imagem)';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(':nome', $evento->getNome());
            $p_sql->bindValue(':tipo', $evento->getTipo());
            $p_sql->bindValue(':datahora',$evento->getData());
            $p_sql->bindValue(':preco', $evento->getPreco());
            $p_sql->bindValue(':quantidade', $evento->getQuantidade());
            $p_sql->bindValue(':descricao', $evento->getDescricao());
            $p_sql->bindValue(':imagem', $evento->getImagem());

            if ($p_sql->execute()) {
                self::$n = Conexao::getInstancia()->lastInsertId();
                return self::$n;

            }

        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }

}
