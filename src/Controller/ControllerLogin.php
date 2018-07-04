<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 30/06/18
 * Time: 11:06
 */

namespace Ticket\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Ticket\Entidades\Usuario;
use Ticket\Util\Sessao;
use Twig\Environment;
use Ticket\Modelos\ModeloUsuario;
use Ticket\Modelos\ModeloEvento;

class ControllerLogin
{

    private $sessao;
    private $response;
    private $contexto;
    private $twig;

    public function __construct(Response $response, Request $contexto, Environment $twig, Sessao $sessao){
        $this->response = $response;
        $this->contexto = $contexto;
        $this->twig = $twig;
        $this->sessao = $sessao;
    }

    public function novaSessao(){
        $nome = $this->contexto->get('nome');
        $senha = $this->contexto->get('senha');
        $usuario = new Usuario($nome,null,$nome,$senha,null);
        $modeloUsuario = new ModeloUsuario();
        if ($linha = $modeloUsuario->buscaPorNomeEmailSenha($usuario)) {
            $this->sessao->add('user',$linha['id']);

            $this->sessao->rem('admin');
            echo('<meta http-equiv="refresh" content=1;url="http://www.meuseventos.com/">');
        }
        else
            echo ('<p align="center">Login invalido</p>');
    }

    public function novaSessaoAdm(){
        $nome = $this->contexto->get('nome');
        $senha = $this->contexto->get('senha');

        $usuario = new Usuario($nome,null,$nome,$senha,null);
        $modeloUsuario = new ModeloUsuario();
        if ($linha = $modeloUsuario->buscaPorNomeEmailSenhaAdm($usuario)) {
            $this->sessao->rem('user');
            $this->sessao->add('admin',$linha['id']);

            echo('<meta http-equiv="refresh" content=1;url="http://www.meuseventos.com/formularioIngresso">');
        }
        else
            echo('<p align="center">Login invalido</p>');

    }

    public function login(){
        if ($this->sessao->existe('user')) {
            return $this->response->setContent($this->twig->render('painelUsuario.twig'));
        }else
            return $this->response->setContent($this->twig->render('login.twig'));
    }
    public function loginAdm(){
        if ($this->sessao->existe('admin')) {
            $modelo = new ModeloEvento();
            $dados = $modelo->listarTodos();
            return $this->response->setContent($this->twig->render('cadastroIngresso.twig', ['dados' => $dados]));

        }else
        return $this->response->setContent($this->twig->render('loginAdm.twig'));

    }
    public function sair(){
        $this->sessao->rem("admin");
        $this->sessao->rem("user");
        $modelo = new ModeloEvento();

        $dados = $modelo->listarEvento();

        return $this->response->setContent($this->twig->render('index.twig', ['dados' => $dados]));

    }
    public function cadastro()
    {
        $nome = $this->contexto->get('nome');
        $sobrenome = $this->contexto->get('sobrenome');
        $email = $this->contexto->get('email');
        $senha = $this->contexto->get('senha');
        $usuario = new Usuario($nome,$sobrenome,$email, $senha,1);
        $modeloUsuario = new ModeloUsuario();
        if ($dados = $modeloUsuario->cadastrar($usuario)) {
            $this->sessao->add('user',$dados);
            $this->sessao->rem('admin');
            echo('<meta http-equiv="refresh" content=1;url="http://www.meuseventos.com/login">');

        }
        else
            echo "erro na inserção";

    }


}