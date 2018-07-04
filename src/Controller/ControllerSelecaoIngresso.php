<?php

namespace Ticket\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ticket\Entidades\Evento;
use Ticket\Modelos\ModeloEvento;
use Twig\Environment;
use Ticket\Util\Sessao;

class ControllerSelecaoIngresso {

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

        $modelo = new ModeloEvento();

        $dados = $modelo->buscarEvento(str_replace("/ver/","",  $this->contexto->getRequestUri()));

        return $this->response->setContent($this->twig->render('eventoSelecionado.twig', ['dados' => $dados]));

    }
}
