<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $sala = $_POST["sala"];
            $codigo = $_POST["codigo"];
            $descricao = $_POST["descricao"];

            $sql = "INSERT INTO login (sala, codigo, descricao) VALUES ('{$sala}', '${codigo}', '${descricao}')";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro realizado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Nao foi possivel realizar o cadastro.');</script>";
                print "<script>location.href='?page=listar';</script>";

            }
            break;

        case 'editar': 
            $sala = $_POST["sala"];
            $codigo = $_POST["codigo"];
            $descricao = $_POST["descricao"];


            $sql = "UPDATE login SET
                                sala='{$sala}',
                                codigo='{$codigo}',
                                descricao='{$descricao}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Nao foi possivel editar a sala.');</script>";
                print "<script>location.href='?page=listar';</script>";

            }
            break;

        case 'excluir':
            $sql = "DELETE FROM login WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);
            if($res==true){
                print "<script>alert('Excluido com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Nao foi possivel excluir a sala.');</script>";
                print "<script>location.href='?page=listar';</script>";

            }
            break;
    }