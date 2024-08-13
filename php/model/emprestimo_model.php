<?php
    include 'dbfunctions.php';

    function inserir($nome_aluno, $data_emprestimo, $titulo_livro){
        $sql = "INSERT INTO emprestimo (nome_aluno, data_emprestimo, titulo_livro) VALUES ('$nome_aluno', '$data_emprestimo', '$titulo_livro')";
        executarSQL($sql);
    }
    function listar(){
        $sql = "SELECT * FROM emprestimo";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function buscar($id){
        $sql = "SELECT * FROM emprestimo WHERE id = '$id'";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function atualizar($id , $nome_aluno, $data_emprestimo, $titulo_livro){
        $sql = "UPDATE emprestimo SET nome_aluno = '$nome_aluno', data_emprestimo = '$data_emprestimo', titulo_livro = '$titulo_livro' WHERE id = '$id'";
        executarSQL($sql);
    }
    function excluir($id){
        $sql = "DELETE FROM emprestimo WHERE id = '$id'";
        executarSQL($sql);
    }
?>