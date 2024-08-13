<?php
    session_start();

    function setUsuario($usuario){
        $_SESSION['cpf'] = $usuario['cpf'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['telefone'] = $usuario['telefone'];
        $_SESSION['senha'] = $usuario['senha'];
    }
    function setAluno($aluno){
        $_SESSION['nome'] = $aluno['nome'];
        $_SESSION['email'] = $aluno['email'];
        $_SESSION['telefone'] = $aluno['telefone'];
        $_SESSION['senha'] = $aluno['senha'];
    }
    function isSession(){
        if(!isset($_SESSION['email'])){
            header('location:usuario.php?login');
        }
    }
?>