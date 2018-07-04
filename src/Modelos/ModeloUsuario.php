<?php

namespace Ticket\Modelos;

use Ticket\Entidades\Usuario;
use Ticket\Util\Conexao;
use Ticket\Entidades\Produto;

use PDO;

class ModeloUsuario {
    private static $n;
    function __construct() {
        
    }

    function listarUsuario() {

        try {

            $sql = 'select * from usuario';

            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->execute();

            return $p_sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }

    function buscaPorNomeEmailSenha(Usuario $usuario){
        $sql_nome = 'select * from usuario where ((nome like :nome) || (email like :email)) && (senha = MD5(:senha)) &&(tipo = 1)';
        $p_sql = Conexao::getInstancia()->prepare($sql_nome);
        $p_sql->bindValue(':nome', $usuario->getNome());
        $p_sql->bindValue(':email', $usuario->getEmail());
        $p_sql->bindValue(':senha', $usuario->getSenha());
        $p_sql->execute();

        return $p_sql->fetch(PDO::FETCH_ASSOC);

    }
    function buscaPorNomeEmailSenhaAdm(Usuario $usuario){
        $sql_nome = 'select * from usuario where ((nome like :nome) || (email like :email)) && (senha = MD5(:senha)) &&(tipo = 2)';
        $p_sql = Conexao::getInstancia()->prepare($sql_nome);
        $p_sql->bindValue(':nome', $usuario->getNome());
        $p_sql->bindValue(':email', $usuario->getEmail());
        $p_sql->bindValue(':senha', $usuario->getSenha());
        $p_sql->execute();

        return $p_sql->fetch(PDO::FETCH_ASSOC);

    }
    function cadastrar(Usuario $usuario) {

        try {
            $sql = 'insert into usuario (nome, sobrenome, email,senha, tipo) values(:nome, :sobrenome, :email, MD5(:senha),:tipo)';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(':nome', $usuario->getNome());
            $p_sql->bindValue(':sobrenome', $usuario->getSobrenomo());
            $p_sql->bindValue(':email',$usuario->getEmail());
            $p_sql->bindValue(':senha',$usuario->getSenha());
            $p_sql->bindValue(':tipo',$usuario->getTipo());
            if ($p_sql->execute()) {
                self::$n = Conexao::getInstancia()->lastInsertId();
                return self::$n;

            }
        } catch (Exception $ex) {
            return 'deu erro na conexão:' . $ex;
        }
    }

}
