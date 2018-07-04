<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 28/06/18
 * Time: 12:30
 */
namespace Ticket\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Ticket\Modelos\ModeloEvento;
use Ticket\Util\Sessao;
use Twig\Environment;
use Ticket\Modelos\ModeloProdutos;


class ControllerIndex
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



    public function mainIndex(){

            $modelo = new ModeloEvento();

            $dados = $modelo->listarEvento();

            return $this->response->setContent($this->twig->render('index.twig', ['dados' => $dados]));

    }
    public function sobre(){
        return $this->response->setContent($this->twig->render('sobre.twig'));
    }

    public function filme(){

        $modelo = new ModeloEvento();
        $dados = $modelo->listarEventoPorTipo("filme");

        return $this->response->setContent($this->twig->render('eventoGenerico.twig', ['dados' => $dados]));

    }
    public function show(){

        $modelo = new ModeloEvento();

        $dados = $modelo->listarEventoPorTipo("show");

        return $this->response->setContent($this->twig->render('eventoGenerico.twig', ['dados' => $dados]));

    }
    public function esposicao(){

        $modelo = new ModeloEvento();

        $dados = $modelo->listarEventoPorTipo("esposicao");

        return $this->response->setContent($this->twig->render('eventoGenerico.twig', ['dados' => $dados]));

    }
    public function infantil(){

        $modelo = new ModeloEvento();

        $dados = $modelo->listarEventoPorTipo("infantil");

        return $this->response->setContent($this->twig->render('eventoGenerico.twig', ['dados' => $dados]));

    }
    public function danca(){

        $modelo = new ModeloEvento();

        $dados = $modelo->listarEventoPorTipo("danca");

        return $this->response->setContent($this->twig->render('eventoGenerico.twig', ['dados' => $dados]));

    }

    public function teatro(){

        $modelo = new ModeloEvento();

        $dados = $modelo->listarEventoPorTipo("teatro");

        return $this->response->setContent($this->twig->render('eventoGenerico.twig', ['dados' => $dados]));

    }
    public function festa(){

        $modelo = new ModeloEvento();

        $dados = $modelo->listarEventoPorTipo("festa");

        return $this->response->setContent($this->twig->render('eventoGenerico.twig', ['dados' => $dados]));

    }
    public function classico(){

        $modelo = new ModeloEvento();

        $dados = $modelo->listarEventoPorTipo("chassico");

        return $this->response->setContent($this->twig->render('eventoGenerico.twig', ['dados' => $dados]));

    }

}