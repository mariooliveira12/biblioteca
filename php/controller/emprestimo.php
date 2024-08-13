<?php
    include_once '_sessao.php';
    include '../model/emprestimo_model.php';
    include '../view/header2.php';

    function index($msgAlert, $typeAlert){
        $emprestimos = listar();
        include_once '../view/aluno/emprestimo_livro.php';
    }
    if(isset($_POST['emprestimoLivro'])){
        inserir(
            $_POST['nome_aluno'], 
            $_POST['data_emprestimo'],
            $_POST['titulo_livro']
        );
        $msgAlert = 'Emprestimo realizado com sucesso!';
        $typeAlert = 'success';
        index($msgAlert, $typeAlert);
    }else if(isset($_GET['id'])){
        $resultado = buscar($_GET['id']);
        $livro = $resultado[0]; 
        include('../view/livro/livro_edit.php');
    }else if(isset($_POST['atualizar'])){
        atualizar(
            $_POST['id'],
            $_POST['nome_aluno'], 
            $_POST['data_emprestimo'],
            $_POST['titulo_livro']
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