<h1> Novo Usuário </h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome</Label>
        <input type="text"  name="nome" placeholder= "Digite aqui seu Nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text"  name="email" placeholder= "Digite aqui seu E-mail" class="form-control"required>
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password"  name="senha" placeholder= "Digite aqui sua senha"class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date"  name="data_nasc" class="form-control"required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
