<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3"> 
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>  
        <input type="text" name="cpf" value="<?php print $row->cpf; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>  
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>  
        <input type="password" name="senha" class="form-control" required> 
        <!-- Required foi usado aqui de forma que obrigue o usuário a digitar a sua senha -->
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>  
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control">
    </div>
    <div class="mb-3">
        
    </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
</form>