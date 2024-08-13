<?php
    include 'dbfunctions.php';

    function inserir($nome, $email, $telefone, $senha){
        $sql = "INSERT INTO aluno (nome, email, telefone, senha) VALUES ('$nome', '$email', '$telefone', '$senha')";
        executarSQL($sql);
    }
    function listar(){
        $sql = "SELECT * FROM aluno";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function buscar($email){
        $sql = "SELECT * FROM aluno WHERE email = '$email'";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function atualizar($nome, $email, $telefone, $senha){
        $sql = "UPDATE aluno SET nome = '$nome', telefone = '$telefone', senha = '$senha' WHERE email = '$email'";
        executarSQL($sql);
    }
    function excluir($email){
        $sql = "DELETE FROM aluno WHERE email = '$email'";
        executarSQL($sql);
    }
?>