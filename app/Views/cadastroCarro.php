<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <h1 class="titulo">Cadastre seu veículo!</h1>
        </div>
    </div>
    <div class="formulario row">
        <div class="col-8 offset-2">
            <form method="post" action="create">
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" placeholder='Marca do carro que deseja cadastrar' value="<?= isset($veiculo['marca']) ? $veiculo['marca'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="modelo">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo do carro que deseja cadastrar" value="<?= isset($veiculo['modelo']) ? $veiculo['modelo'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa do carro que deseja cadastrar" value="<?= isset($veiculo['placa']) ? $veiculo['placa'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="cor">Cor</label>
                    <input type="text" class="form-control" id="cor" name="cor" placeholder="Cor do carro que deseja cadastrar" value="<?= isset($veiculo['cor']) ? $veiculo['cor'] : "" ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?= isset($veiculo['id']) ? $veiculo['id'] : ""  ?>">
                </div>
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </form>
        </div>
    </div>
</div>