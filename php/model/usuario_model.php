<?php
    include 'dbfunctions.php';

    function inserir($CPF, $email, $telefone, $senha){
        $sql = "INSERT INTO bibliotecario (CPF, email, telefone, senha) VALUES ('$CPF', '$email', '$telefone', '$senha')";
        executarSQL($sql);
    }
    function listar(){
        $sql = "SELECT * FROM bibliotecario";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function buscar($email){
        $sql = "SELECT * FROM bibliotecario WHERE email = '$email'";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function atualizar($CPF, $email, $telefone, $senha){
        $sql = "UPDATE bibliotecario SET CPF = '$CPF', telefone = '$telefone', senha = '$senha' WHERE email = '$email'";
        executarSQL($sql);
    }
    function excluir($email){
        $sql = "DELETE FROM bibliotecario WHERE email = '$email'";
        executarSQL($sql);
    }
?>