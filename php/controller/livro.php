<?php
    include_once '_sessao.php';
    isSession();
    include '../model/livro_model.php';
    include '../view/header.php';

    function index($msgAlert, $typeAlert){
        $livros = listar();
        include '../view/livro/cadastro_livro.php';
    }
    if(isset($_POST['cadastroLivro'])){
        inserir(
            $_POST['titulo'], 
            $_POST['numero_copia'],
            $_POST['autor'],
            $_POST['estado_livro'],
            $_POST['condicao_livro']
        );
        $msgAlert = 'Livro cadastrado com sucesso!';
        $typeAlert = 'success';
        index($msgAlert, $typeAlert);
    }else if(isset($_GET['id'])){
        $resultado = buscar($_GET['id']);
        $livro = $resultado[0]; 
        include('../view/livro/livro_edit.php');
    }else if(isset($_POST['atualizar'])){
        atualizar(
            $_POST['id'],
            $_POST['titulo'], 
            $_POST['numero_copia'],
            $_POST['autor'],
            $_POST['estado_livro'],
            $_POST['condicao_livro']
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

    include '../view/footer.php';
?>