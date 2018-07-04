<?php

namespace Ticket\Rotas;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

    $rotas = new RouteCollection();




    $rotas->add('/', new Route('/',
        array('_controller' => 'Ticket\Controller\ControllerIndex',
            "method" => 'mainIndex')));

    $rotas->add('filme', new Route('/filme',
    array('_controller' => 'Ticket\Controller\ControllerIndex',
        "method" => 'filme')));

    $rotas->add('show', new Route('/show',
    array('_controller' => 'Ticket\Controller\ControllerIndex',
        "method" => 'show')));

    $rotas->add('esposicao', new Route('/esposicao',
    array('_controller' => 'Ticket\Controller\ControllerIndex',
        "method" => 'esposicao')));

    $rotas->add('teatro', new Route('/teatro',
    array('_controller' => 'Ticket\Controller\ControllerIndex',
        "method" => 'teatro')));

    $rotas->add('infantil', new Route('/infantil',
    array('_controller' => 'Ticket\Controller\ControllerIndex',
        "method" => 'infantil')));

    $rotas->add('danca', new Route('/danca',
        array('_controller' => 'Ticket\Controller\ControllerIndex',
            "method" => 'danca')));

    $rotas->add('festa', new Route('/festa',
        array('_controller' => 'Ticket\Controller\ControllerIndex',
            "method" => 'festa')));

    $rotas->add('classico', new Route('/classico',
        array('_controller' => 'Ticket\Controller\ControllerIndex',
            "method" => 'classico')));

    $rotas->add('concluirCompra', new Route('/concluirCompra',
    array('_controller' => 'Ticket\Controller\ControllerCompra',
        "method" => 'show')));

    $rotas->add('selecaoEvento', new Route('/ver/{suffix}',
    array('_controller' => 'Ticket\Controller\ControllerSelecaoIngresso',
        "method" => 'show')));

    $rotas->add('mostrarQRCode', new Route('/mostrarQRCode/{suffix}',
    array('_controller' => 'Ticket\Controller\ControllerSelecaoIngresso',
        "method" => 'show')));

    $rotas->add('sair', new Route('/sair',
    array('_controller' => 'Ticket\Controller\ControllerLogin',
        "method" => 'sair')));

    $rotas->add('sobre', new Route('/sobre',
    array('_controller' => 'Ticket\Controller\ControllerIndex',
        "method" => 'sobre')));

    $rotas->add('loginAdm', new Route('/loginAdm',
    array('_controller' => 'Ticket\Controller\ControllerLogin',
        "method" => 'loginAdm')));

    $rotas->add('loginAdmConf', new Route('/verificarLoginAdm',
    array('_controller' => 'Ticket\Controller\ControllerLogin',
        "method" => 'novaSessaoAdm')));

    $rotas->add('/login', new Route('/login',
    array('_controller' => 'Ticket\Controller\ControllerLogin',
        "method" => 'login')));

    $rotas->add('loginCadastro', new Route('/cadastroUsuario',
        array('_controller' => 'Ticket\Controller\ControllerLogin',
        "method" => 'cadastro')));

    $rotas->add('login', new Route('/verificarLogin',
    array('_controller' => 'Ticket\Controller\ControllerLogin',
        "method" => 'novaSessao')));

    $rotas->add('cadastroProduto', new Route('/cadastro',
    array('_controller' => 'Ticket\Controller\ControllerCadastro',
        "method" => 'cadastro')));


    $rotas->add('cadastroIngresso', new Route('/cadastroIngresso',
    array('_controller' => 'Ticket\Controller\ControllerIngresso',
        "method" => 'cadastro')));

    $rotas->add('excluirIngresso', new Route('/excluirIngresso',
    array('_controller' => 'Ticket\Controller\ControllerIngresso',
        "method" => 'excluir')));


    $rotas->add('formCadastroIngresso', new Route('/formularioIngresso',
    array('_controller' => 'Ticket\Controller\ControllerIngresso',
        "method" => 'show')));

    $rotas->add('formCadastro', new Route('/formularioCadastro',
        array('_controller' => 'Ticket\Controller\ControllerCadastro',
            "method" => 'show')));


    return $rotas;

