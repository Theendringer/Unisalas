<h1>Listar Salas</h1>
<?php
    $sql = "SELECT * FROM login";
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<th>Sala</th>";
            print "<th>Codigo</th>";
            print "<th>Descricao</th>";
            print "<th>Acoes</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->sala."</td>";
            print "<td>".$row->codigo."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>
            <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false}\" class='btn btn-danger'>Excluir</button>


                    </td>";
            print "</tr>";
        }
        print "</tabble>";
    }else{
        print "<p class='alert alert-danger'>Nao encontrou resultados!</p>";
    }

?>