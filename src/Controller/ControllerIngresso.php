<?php

namespace Ticket\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ticket\Entidades\Evento;
use Ticket\Modelos\ModeloEvento;
use Twig\Environment;
use Ticket\Util\Sessao;

class ControllerIngresso {

    private $response;
    private $contexto;
    private $twig;
    private $sessao;
    public function __construct(Response $response, Request $contexto, Environment $twig, Sessao $sessao) {
        $this->response = $response;
        $this->contexto = $contexto;
        $this->twig = $twig;
        $this->sessao = $sessao;
    }

    public function show() {

        if ($this->sessao->existe('admin')) {
            $modelo = new ModeloEvento();

            $dados = $modelo->listarTodos();
            return $this->response->setContent($this->twig->render('cadastroIngresso.twig', ['dados' => $dados]));

        }
        else{
            $destino = '/loginAdm';
            $redirecionar = new RedirectResponse($destino);
            $redirecionar->send();
            
        }
    }


    public function cadastro()
    {

        $imagem = $this->contexto->files->get('imagem');
        $ext = $imagem->getClientOriginalExtension();
        $nome_atual = md5(uniqid(time())).".".$ext;
        $imagem->move("/var/www/Ticket/public/upload/",$nome_atual);

         $nome = $this->contexto->get('nome');
         $tipo = $this->contexto->get('tipo');
         $data = $this->contexto->get('data');
         $preco = $this->contexto->get('preco');
         $quantidade = $this->contexto->get('quantidade');
         $descricao = $this->contexto->get('descricao');
         $imagem = $nome_atual;
         $evento = new Evento($nome,$tipo,$data,$preco,$quantidade,$descricao,$imagem);


           $modeloEvento = new ModeloEvento();
           if ($id = $modeloEvento->cadastrarEvento($evento))
           echo ("Produto $id inserido com sucesso");
           else
           echo "erro na inserção";
    }
    public function excluir()
    {


        $evento = new Evento(null,null,null,null,null,null,null);
        $evento->setId($this->contexto->get('id'));


        $modeloEvento = new ModeloEvento();
        if ($modeloEvento->deletarEvento($evento)) {
            echo("Evento deletado com sucesso");
            echo('<meta http-equiv="refresh" content=1;url="http://www.meuseventos.com/formularioIngresso">');
        }
        else
            echo "erro ao deletar";

    }
}
