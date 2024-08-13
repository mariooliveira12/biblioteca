<?php
    include 'dbfunctions.php';

    function inserir($titulo, $numero_copia, $autor, $estado_livro, $condicao_livro){
        $sql = "INSERT INTO livro (titulo, numero_copia, autor, estado_livro, condicao_livro) VALUES ('$titulo', '$numero_copia', '$autor', '$estado_livro', '$condicao_livro')";
        executarSQL($sql);
    }
    function listar(){
        $sql = "SELECT * FROM livro";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function buscar($id){
        $sql = "SELECT * FROM livro WHERE id = '$id'";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function atualizar($id ,$titulo, $numero_copia, $autor, $estado_livro, $condicao_livro){
        $sql = "UPDATE livro SET titulo = '$titulo', numero_copia = '$numero_copia', autor = '$autor', estado_livro = '$estado_livro', condicao_livro = '$condicao_livro' WHERE id = '$id'";
        executarSQL($sql);
    }
    function excluir($id){
        $sql = "DELETE FROM livro WHERE id = '$id'";
        executarSQL($sql);
    }
?>