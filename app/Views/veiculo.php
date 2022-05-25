<div class="row">
    <div class="col-8 offset-2">
        <h1 class="titulo">Veículos</h1>
    </div>
</div>
<div class="col-10 offset-1">
<br>
    <table class="table">
        <tr>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Placa</td>
            <td>Cor</td>
        </tr>

<?php
    foreach($veiculo as $veiculo_item){
?>
        <tr>
            <td><?= $veiculo_item['marca'] ?></td>
            <td><?= $veiculo_item['modelo'] ?></td>
            <td><?= $veiculo_item['placa'] ?></td>
            <td><?= $veiculo_item['cor'] ?></td>
            <td><a href="excluir/<?= $veiculo_item['id']?>" class="btn btn-danger">Apagar</a></td>
            <td><a href="editar/<?= $veiculo_item['id']?>" class="btn btn-dark">Editar</a></td>
        </tr>
<?php
    }
?>
    </table>
</div>