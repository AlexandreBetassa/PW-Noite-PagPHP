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
    <table class="table table-striped table-light">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Bloco</th>
                <th scope="col">Capacidade</th>
                <th scope="col">Numero</th>
                <th scope="col">Permitir Reserva</th>
                <th scope="col">Equipamentos na sala</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <?php

        $salas = file_get_contents("https://reserva.fatectq.edu.br/api/salas/");
        $salas = json_decode($salas, true);

        for ($i = 0; $i < count($salas); $i++) {
        ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $salas[$i]["salaId"] ?></th>
                    <td><?php echo $salas[$i]["nome"] ?></td>
                    <td><?php echo $salas[$i]["descricao"] ?></td>
                    <td><?php echo $salas[$i]["bloco"] ?></td>
                    <td><?php echo $salas[$i]["capacidade"] ?></td>
                    <td><?php echo $salas[$i]["numero"] ?></td>
                    <td><?php echo $salas[$i]["permitirReserva"] ?></td>
                    <td><?php echo $salas[$i]["equipamentosSala"] ?></td>

                    <td><button type="button" class="btn btn-warning">Editar</button>&nbsp&nbsp&nbsp<button type="button" class="btn btn-danger">Excluir</button></td>
                </tr>
            </tbody>
        <?php  } ?>
    </table>
</div>
</div>

<?php
include "./rodape.php"
?>