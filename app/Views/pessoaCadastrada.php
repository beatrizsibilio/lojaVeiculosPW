<div id="menu">
    <div class="col-10 offset-1">
    <h1> <?=$title?> </h1>
    <br>
        <table class="table">
            <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>Senha</td>
            </tr>
    
    <?php
        foreach($pessoas as $pessoa_item){
    ?>
            <tr>
                <td><?= $pessoa_item['nome'] ?></td>
                <td><?= $pessoa_item['email'] ?></td>
                <td><?= $pessoa_item['senha'] ?></td>
                <td><a href="excluir/<?= $pessoa_item['id']?>" class="btn btn-danger">Apagar</a></td>
                <td><a href="editar/<?= $pessoa_item['id']?>" class="btn btn-warning">Editar</a></td>
            </tr>
    <?php
        }
    ?>
        </table>
    </div>
</div>