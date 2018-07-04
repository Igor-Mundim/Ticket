<?php

namespace Ticket\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Ticket\Entidades\Compra;
use Ticket\Entidades\Evento;
use Ticket\Modelos\ModeloCompra;
use Ticket\Modelos\ModeloEvento;
use Twig\Environment;
use Ticket\Util\Sessao;

class ControllerCompra {

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

        if ($this->sessao->existe('user') || $this->sessao->existe('admin')) {
            $quantidade = $this->contexto->get('quantidade');
            $idingresso = $this->contexto->get('id');


            if($this->sessao->existe('user'))
            $idusuario = $this->sessao->get('user');
            else
                $idusuario = $this->sessao->get('admin');


            $qrcode = rand(100,1000000);
            $evento = new Evento(null,null,null,null,$quantidade,null,null);
            $evento->setId($idingresso);
            $modeloEvento = new ModeloEvento();
            $modeloEvento->cadastroUpdate($evento);
                $compra = new Compra($idusuario, $qrcode, $idingresso);
                $modeloCompra = new ModeloCompra();
                if ($id = $modeloCompra->cadastrar($compra))
                    echo("Compra realizada com sucesso!!! Segue abaixo informações...");
                else
                    echo "erro na inserção";


            include ("qrcode.php");
            echo "<div class='container'><script >
        new QRCode(document.getElementById('qrcode'), {
            text: '$qrcode',
            width: 300,
            height: 300,
            colorDark: '#000000',
            colorLight: '#ffffff',
            correctLevel: QRCode.CorrectLevel.H
        })
         </script></div>";
            return $this->response->setContent($this->twig->render('gerarCode.twig'));

        }
        else{
           echo ('<p align="center">Usuario não cadastrado!</p>');
            echo('<meta http-equiv="refresh" content=1;url="http://www.meuseventos.com/login">');

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

}
