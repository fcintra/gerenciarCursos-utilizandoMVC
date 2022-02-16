<?php
require __DIR__ . '/../vendor/autoload.php';


use Alura\Cursos\Controller\InterfaceControladorRequisicao;


$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if(!array_key_exists($caminho, $rotas)){
    http_response_code(404);
    exit();
}


session_start();

$rotaLogin = stripos($caminho, 'login');
if(!isset($_SESSION['logado']) && $rotaLogin === false){
    header('Location: /login');
    exit;
}


$classeControladora = $rotas[$caminho];
$controlador = New $classeControladora();
$controlador->processaRequisicao();


?>