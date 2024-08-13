<?php
    include 'dbfunctions.php';

    function inserir($nome_livro, $nome_aluno, $aluno_fila){
        $sql = "INSERT INTO reserva (nome_livro, nome_aluno, aluno_fila) VALUES ('$nome_livro', '$nome_aluno', '$aluno_fila')";
        executarSQL($sql);
    }
    function listar(){
        $sql = "SELECT * FROM reserva";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function buscar($id){
        $sql = "SELECT * FROM reserva WHERE id = '$id'";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function atualizar($id , $nome_livro, $nome_aluno, $aluno_fila){
        $sql = "UPDATE reserva SET nome_livro = '$nome_livro', nome_aluno = '$nome_aluno', aluno_fila = '$aluno_fila' WHERE id = '$id'";
        executarSQL($sql);
    }
    function excluir($id){
        $sql = "DELETE FROM reserva WHERE id = '$id'";
        executarSQL($sql);
    }
?>