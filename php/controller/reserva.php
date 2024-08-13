<?php
    include_once '_sessao.php';
    include '../model/reserva_model.php';
    include '../view/header2.php';

    function index($msgAlert, $typeAlert){
        $reservas = listar();
        include_once '../view/aluno/reserva_livro.php';
    }
    if(isset($_POST['reservaLivro'])){
        inserir(
            $_POST['nome_livro'], 
            $_POST['nome_aluno'],
            $_POST['aluno_fila']
        );
        $msgAlert = 'Livro reservado com sucesso!';
        $typeAlert = 'success';
        index($msgAlert, $typeAlert);
    }else if(isset($_GET['id'])){
        $resultado = buscar($_GET['id']);
        $livro = $resultado[0]; 
        include('../view/livro/livro_edit.php');
    }else if(isset($_POST['atualizar'])){
        atualizar(
            $_POST['id'],
            $_POST['nome_livro'], 
            $_POST['nome_aluno'],
            $_POST['aluno_fila']
        );
        $msgAlert = 'Livro atualizado com sucesso!';
        $typeAlert = 'warning';
        index($msgAlert, $typeAlert);
    }else if(isset($_GET['excluir'])){
        excluir($_GET['excluir']);
        $msgAlert = 'Livro excluido com sucesso!';
        $typeAlert = 'danger';
        index($msgAlert, $typeAlert);
    }else{
        $msgAlert = '';
        $typeAlert = '';
        index($msgAlert, $typeAlert);
    }

    include '../view/footer2.php';
?>