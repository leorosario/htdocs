<?php
use Slim\App;
return function (App $app) {
    //ROTAS DO PAINEL ADMINISTRATIVO
    $app->get('/admin', '\App\Controller\AdminController:index');
    $app->get('/login', '\App\Controller\AdminController:login');
    $app->get('/logout', '\App\Controller\AdminController:logout');

    $app->post('/login', '\App\Controller\AdminController:verifica_login');

    //SERVIÇOS
    $app->get('/admin-servicos', '\App\Controller\ServicoController:index');
    $app->get('/admin-servicos-create', '\App\Controller\ServicoController:create');

    $app->post('/admin-servicos-create', '\App\Controller\ServicoController:insert');

    //ROTAS DO WEB SITE
    $app->get('/', '\App\Controller\HomeController:home');
    $app->get('/a-rlbs-motors', '\App\Controller\HomeController:a_rlbs_motors');
    $app->get('/servicos', '\App\Controller\HomeController:servicos');
    $app->get('/videos', '\App\Controller\HomeController:videos');
    $app->get('/blog', '\App\Controller\HomeController:blog');
    $app->get('/fale-conosco', '\App\Controller\HomeController:fale_conosco');

    
    $app->get('/blog/{any}', '\App\Controller\HomeController:blog_detalhe');
    $app->get('/{any}', '\App\Controller\HomeController:servico_detalhe');    
};
