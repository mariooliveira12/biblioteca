<?php
    include '../model/cliente_model.php';
    include_once '_sessao.php';

    function index($msgAlert, $typeAlert){
          $livros = listar();
          include '../view/header2.php';
          include '../view/aluno/home_biblioteca.php';
          include '../view/footer2.php';
    }
    function login($msgAlert, $typeAlert){
        include '../view/aluno/login_aluno.php';
    }    
    if(isset($_GET['login_aluno'])){
        $msgAlert = '';
        $typeAlert = '';
        login($msgAlert,$typeAlert);
    }
    else if(isset($_POST['autenticar_aluno'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $resultado = buscar($email);
        if($resultado != 0){
            if($resultado[0]['email'] == $email && $resultado[0]['senha'] == $senha){
                setAluno($resultado[0]);
                header('location:biblioteca.php');
            }else{
                $msgAlert = 'Usuário e/ou senha incorretos';
                $typeAlert = 'danger';
                login($msgAlert, $typeAlert);
            }      
        }else{
            $msgAlert = 'Usuário não encontrado';
            $typeAlert = 'warning';
            login($msgAlert, $typeAlert);
        }   
    
    }
    else{
        $msgAlert = '';
        $typeAlert = '';
        index($msgAlert, $typeAlert);  
    }
?>