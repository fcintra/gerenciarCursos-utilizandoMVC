<?php

use Alura\Cursos\Controller\{ListarCursos, FormularioInsercao, 
    Persistencia, Exclusao, FormularioEdicao, FormularioLogin, RealizarLogin, Deslogar, CursosEmJson, DashBoardCursos};

return [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => FormularioEdicao::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizarLogin::class,
    '/logout' => Deslogar::class,
    '/stats-cursos' => DashBoardCursos::class
];