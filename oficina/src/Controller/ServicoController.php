<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;
use App\Model\Usuario;
use App\Model\Servico;

final class ServicoController
{
    function __construct(){
        if(!isset($_SESSION)){
			session_start();
		}
    }

    public function index(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {     
        Usuario::verifica_login();

        $data['informacoes'] = array(
            'titleHeader' => 'Serviços - Painel Administrativo - A RLBS Motors',
            'menuActive' => 'servicos'
        );

        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN);
        return $renderer->render($response, "servico/index.php", $data);
    }
    
    public function create(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {     
        Usuario::verifica_login();

        $data['informacoes'] = array(
            'titleHeader' => 'Novo Serviço - Painel Administrativo - A RLBS Motors',
            'menuActive' => 'servicos'
        );

        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES_ADMIN);
        return $renderer->render($response, "servico/create.php", $data);
    }

    public function insert(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $posts = $request->getParsedBody();
        if($request->getUploadedFiles()['imagem_principal']){
            $imagem_principal = $request->getUploadedFiles()['imagem_principal'];
        }else{
            $imagem_principal = false;
        }
        $nome_imagem_principal = "";
        if ($imagem_principal) {
            if ($imagem_principal->getError() === UPLOAD_ERR_OK) {
                $extensao = pathinfo($imagem_principal->getClientFilename(), PATHINFO_EXTENSION);
                $nome = md5(uniqid(rand(), true)).pathinfo($imagem_principal->getClientFilename(), PATHINFO_FILENAME).".".$extensao;
                $nome_imagem_principal = "resources/imagens/servicos/" . $nome;
                $imagem_principal->moveTo($nome_imagem_principal);
            }
        }
     
        $campos = array(
            'titulo' => $posts['titulo'],
            'url_amigavel' => $this->gerarUrlAmigavel($posts['titulo']),
            'descricao' => $posts['descricao'],
            'imagem_principal' => $nome_imagem_principal,
            'data_cadastro' => $posts['data'],
            'status' => $posts['ativo']
        );
     
        $servicos = new Servico();
        $servicos->insertServico($campos);
        $id_servico = $servicos->getUltimoServico()['id'];
     
        if($request->getUploadedFiles()['galeria_imagens']){
            $galeria = $request->getUploadedFiles()['galeria_imagens'];
        }else{
            $galeria = false;
        }
     
        if ($galeria) {
            foreach ($galeria as $imagem) {
                $foto = array();
                if ($imagem->getError() === UPLOAD_ERR_OK) {
                    $extensao = pathinfo($imagem->getClientFilename(), PATHINFO_EXTENSION);
                    $nome = md5(uniqid(rand(), true)).pathinfo($imagem->getClientFilename(), PATHINFO_FILENAME).".".$extensao;
                    $foto["caminho"] = "resources/imagens/servicos/" . $nome;
                    $imagem->moveTo($foto["caminho"]);
                    $foto['id_servico'] = $id_servico;
                    $servicos->insertFotoGaleria($foto);
                }
            }
        }
        header('Location: '.URL_BASE.'admin-servicos');
        exit();
    }
     
    private function gerarUrlAmigavel($url) {
        $search = ['@&lt;script[^>]*?>.*?&lt;/script>@si', '@&lt;style[^>]*?>.*?&lt;/style>@siU', '@&lt;[\/\!]*?[^&lt;>]*?>@si', '@&lt;![\s\S]*?--[ \t\n\r]*>@'];
        $string = preg_replace($search, '', $url);
        $table = ['Š'=>'S','š'=>'s','Đ'=>'Dj','đ'=>'dj','Ž'=>'Z','ž'=>'z','Č'=>'C','č'=>'c','Ć'=>'C','ć'=>'c','À'=>'A','Á'=>'A','Â'=>'A','Ã'=>'A','Ä'=>'A','Å'=>'A','Æ'=>'A','Ç'=>'C','È'=>'E','É'=>'E','Ê'=>'E','Ë'=>'E','Ì'=>'I','Í'=>'I','Î'=>'I','Ï'=>'I','Ñ'=>'N','Ò'=>'O','Ó'=>'O','Ô'=>'O','Õ'=>'O','Ö'=>'O','Ø'=>'O','Ù'=>'U','Ú'=>'U','Û'=>'U','Ü'=>'U','Ý'=>'Y','Þ'=>'B','ß'=>'Ss','à'=>'a','á'=>'a','â'=>'a','ã'=>'a','ä'=>'a','å'=>'a','æ'=>'a','ç'=>'c','è'=>'e','é'=>'e','ê'=>'e','ë'=>'e','ì'=>'i','í'=>'i','î'=>'i','ï'=>'i','ð'=>'o','ñ'=>'n','ò'=>'o','ó'=>'o','ô'=>'o','õ'=>'o','ö'=>'o','ø'=>'o','ù'=>'u','ú'=>'u','û'=>'u','ý'=>'y','ý'=>'y','þ'=>'b','ÿ'=>'y','Ŕ'=>'R','ŕ'=>'r'];
        $string = strtr($string, $table);
        $string = mb_strtolower($string);
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        $string = str_replace(" ", "-", $string);
        return $string;
    }
}