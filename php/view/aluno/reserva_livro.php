<html>
<body>
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Reserva</h1>
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
        <h6 class="m-0 font-weight-bold text-primary">Reserva</h6>
    </div>
    <div class="card-body">
    <form action='reserva.php' method='post'>
        <div class="form-group">
            <label>Nome do Livro</label>
            <input type="text" class="form-control" name="nome_livro" required>
        </div>
        <div class="form-group">
            <label>Nome do Aluno</label>
            <input type="text" class="form-control" name="nome_aluno" required>
        </div>
        <div class="form-group">
            <label>Alunos na Fila</label>
            <input type="number" class="form-control" name="aluno_fila" required>
        </div>
        <button type="submit" class="btn btn-success" name='reservaLivro'>Concluir</button>
        <a href='biblioteca.php'><button type="button" class="btn btn-secondary">Voltar</button></a>
    </form>
    </div> 
</div>
</body>
</html>