<html>
<body>
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Emprestimo</h1>
 <?php if($msgAlert != '') :?>
 <div class="alert alert-<?=$typeAlert?> alert-dismissible fade show" role="alert">
    <?=$msgAlert?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
 <?php endif ?>
 <!-- Basic Card Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Emprestimo</h6>
    </div>
    <div class="card-body">
    <form action='emprestimo.php' method='post'>
        <div class="form-group">
            <label>Nome do Aluno</label>
            <input type="text" class="form-control" name="nome_aluno" required>
        </div>
        <div class="form-group">
            <label>Data do Emprestimo</label>
            <input type="date" class="form-control" name="data_emprestimo" required>
        </div>
        <div class="form-group">
            <label>Titulo do Livro</label>
            <input type="text" class="form-control" name="titulo_livro" required>
        </div>
        <button type="submit" class="btn btn-success" name='emprestimoLivro'>Concluir</button>
        <a href='biblioteca.php'><button type="button" class="btn btn-secondary">Voltar</button></a>
    </form>
    </div> 
</div>
</body>
</html>