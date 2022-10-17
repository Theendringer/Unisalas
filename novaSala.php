<h1>Cadastrar Sala</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome Da Sala</label>
        <input type="text" name="sala" class="form-control">
    </div>
    <div class="mb-3">
        <label>Codigo</label>
        <input type="text" name="codigo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descricao</label>
        <input type="text" name="descricao" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>