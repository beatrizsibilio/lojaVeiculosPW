<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <h1 class="titulo">Faça seu cadastro!</h1>
        </div>
    </div>
    <div class="formulario row">
        <div class="col-8 offset-2">
            <form method="post" action="loginPessoa"> 
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu Nome" value="<?= isset($pessoa['nome']) ? $pessoa['nome'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="mail" class='form-control' name="email"  placeholder='Digite seu email' value="<?= isset($pessoa['email']) ? $pessoa['email'] : "" ?>">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" value="<?= isset($pessoa['senha']) ? $pessoa['senha'] : "" ?>">
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
            </form>
        </div>
    </div>
</div>