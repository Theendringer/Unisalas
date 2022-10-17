<h1>Editar Sala</h1>
<?php
    $sql = "SELECT * FROM login WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div class="mb-3">
        <label>Nome Da Sala</label>
        <input type="text" name="sala" value="<?php print $row->sala; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Codigo</label>
        <input type="text" name="codigo" value="<?php print $row->codigo; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descricao</label>
        <input type="text" name="descricao" value="<?php print $row->descricao; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>