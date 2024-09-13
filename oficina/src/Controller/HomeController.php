<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;

final class HomeController
{
    public function home(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'A RLBS Motors - A Oficiona Mecânica de Sertãozinho'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php", $data);
    }

    public function a_rlbs_motors(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Quem Somos - A RLBS Motors',
            'title' => 'A RBLS Motors',
            'caminho' => array(
                [
                    'link' => 'a-rlbs-motors',
                    'nome' => 'A RBLS Motors'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "a_rlbs_motors.php", $data);
    }

    public function servicos(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Serviços - A RLBS Motors',
            'title' => 'Nossos Serviços',
            'caminho' => array(
                [
                    'link' => 'servicos',
                    'nome' => 'Nossos Serviços'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "servicos.php", $data);
    }

    public function videos(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Vídeos - A RLBS Motors',
            'title' => 'Vídeos'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "videos.php", $data);
    }

    public function blog(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Blog - A RLBS Motors',
            'title' => 'Blog'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "blog.php", $data);
    }

    public function fale_conosco(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Fale Conosco - A RLBS Motors',
            'title' => 'Fale Conosco'
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "fale_conosco.php", $data);
    }

    public function blog_detalhe(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'Como trocar um pneu - A RLBS Motors',
            'title' => 'Como trocar um pneu',
            'caminho' => array(
                [
                    'link' => 'blog',
                    'nome' => 'Blog'
                ],
                [
                    'link' => 'como-trocar-um-pneu',
                    'nome' => 'Como trocar um pneu'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "blog_detalhe.php", $data);
    }

    public function servico_detalhe(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = array(
            'titleHeader' => 'NOMEDAPAGINA - A RLBS Motors',
            'title' => 'Ar condicionado',
            'caminho' => array(
                [
                    'link' => 'servicos',
                    'nome' => 'Serviços'
                ],
                [
                    'link' => 'ar-condicionado',
                    'nome' => 'Ar condicionado'
                ]
            )
        );
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "servico.php", $data);
    }
}