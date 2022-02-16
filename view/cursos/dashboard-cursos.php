<?php  include __DIR__ . '/../inicio-html.php'; ?>

<?php $aux = 0;
foreach ($cursos as $curso): 
  $aux = $aux + 1;
endforeach; ?>    

<ul class="list-group">
    
    <li class="list-group-item d-flex justify-content-between">
        Total de cursos:
        <span>
           
            <a href="/listar-cursos" class="btn btn-info btn-sm">
            <?=$aux ?>
            </a>
        </span>
    </li>
    
</ul>

<?php  include __DIR__ . '/../fim-html.php'; ?>