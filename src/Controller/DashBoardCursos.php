<?php
namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;

 class DashBoardCursos implements InterfaceControladorRequisicao
 {
    use RenderizadorDeHtmlTrait;

    private $repositorioDeCursos;
    
    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }

    public function processaRequisicao(): void
    {
        $cursos = $this->repositorioDeCursos->findAll();
        

        echo $this->renderizaHtml('cursos/dashboard-cursos.php', [
            'cursos' => $cursos,
            'titulo' => 'Dash board cursos'
         ]);
       
    }
}
?>