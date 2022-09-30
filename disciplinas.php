<?php
$titulo = "Disciplinas";
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

    <?php
    $disciplinas = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas/");
    $disciplinas = json_decode($disciplinas, true);
    ?>
    <div>
        <table class="table table-striped table-hover table-light">
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
            for ($i = 0; $i < count($disciplinas); $i++) {
            ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $disciplinas[$i]["disciplinaId"] ?></th>
                        <td><?php echo $disciplinas[$i]["nome"] ?></td>
                        <td><?php echo $disciplinas[$i]["sigla"] ?></td>
                        <td><?php echo $disciplinas[$i]["apelido"] ?></td>

                        <td><button type="button" class="btn btn-warning">Editar</button>&nbsp&nbsp&nbsp<button type="button" class="btn btn-danger">Excluir</button></td>
                    </tr>
                </tbody>
            <?php  } ?>
        </table>
    </div>


    <?php
    include "./rodape.php"
    ?>