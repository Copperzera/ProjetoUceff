<h1> Editar Usuário </h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    /* banco = " SELECIONA * DA tabela USUÁRIOS, mas com Parâmetro(WHERE) ID = aos dados vindos do REQUEST ID */
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</Label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" placeholder= "Digite aqui seu Nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" value="<?php print $row->email; ?>" placeholder= "Digite aqui seu E-mail" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" placeholder= "Digite aqui sua senha"class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>"class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
