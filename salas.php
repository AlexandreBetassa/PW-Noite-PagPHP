<?php
$titulo = "Salas";
include "./cabecalho.php";
?>

<div class="container-fluid mt-4 d-flex flex-column container-table">
    <div class="d-flex justify-content-center ">
        <div class="card col-12 ">
            <div class="card-header">
                Lista de Disciplinas
            </div>
            <div class="card-body">
                <div class="row align-items-start">
                    <div class="col-4">
                        <button type="btnNovaDisciplina" class="btn btn-success">Nova Disciplina</button>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="col-4">
                        <a href="#" class="btn btn-primary">Pesquisar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>  
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Sigla</th>
                <th scope="col">Apelido</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <?php

        $materias = array('Administração Geral', 'Padrões de Projeto de Sítios Internet II', 'Pesquisa Operacional', 'Planejamento Estrategico', 'Portugûes', 'Pratica de Design', 'Pratica de Gestão de Projetos');
        $apelidos = array('ADM', 'P PROJ S INT II', 'PO', 'PLAN ESTRAT', 'PORT', 'PRAT DESIGN', 'PRAT G PROJET');

        for($id = 0; $id < 7; $id++) {
        ?>        
        <tbody>
            <tr>
                <th scope="row"><?php echo $id+1 ?></th>
                <td><?php echo $materias[$id]?></td>
                <td></td>
                <td><?php echo $apelidos[$id]?></td>
                <td><button type="button" class="btn btn-warning">Editar</button>&nbsp&nbsp&nbsp<button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
        </tbody>
        <?php } ?>
        </table>
</div>

<?php
include "./rodape.php"
?>