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
    <table class="table table-striped align-middle table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Sigla</th>
                <th scope="col">Apelido</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="col-12 justify-content-space-around">
            <tr>
                <td class="col-2">1</td>
                <td class="col-4">Administração</td>
                <td class="col-2"></td>
                <td class="col-2">ADM GERAL</td>
                <td class="col-1"><button type="button" class="btn btn-warning">Editar</button></td>
                <td class="col-1"><button type="button" class="btn btn-danger">Excluir</button>
                </td>
            </tr>
            <tr>
                <td class="col-2">2</td>
                <td class="col-4">Padrões de Projeto de Sítios Internet II</td>
                <td class="col-2"></td>
                <td class="col-2">P Proj S INT II</td>
                <td class="col-1"><button type="button" class="btn btn-warning">Editar</button></td>
                <td class="col-1"><button type="button" class="btn btn-danger">Excluir</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php
include "./rodape.php"
?>