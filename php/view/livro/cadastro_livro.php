<html>
<body>
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Livro</h1>
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
        <h6 class="m-0 font-weight-bold text-primary">Cadastro Livro</h6>
    </div>
    <div class="card-body">
    <form action='livro.php' method='post'>
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="titulo" required>
        </div>
        <div class="form-group">
            <label>Número de Cópias</label>
            <input type="text" class="form-control" name="numero_copia" required>
        </div>
        <div class="form-group">
            <label>Autores</label>
            <input type="text" class="form-control" name="autor" required>
        </div>
        <div class="form-group">
            <label>Estado do Livro</label>
            <input type="text" class="form-control" name="estado_livro" required>
        </div>
        <div class="form-group">
            <label>Condição do Livro</label>
            <input type="text" class="form-control" name="condicao_livro" required>
        </div>
        <button type="submit" class="btn btn-success" name='cadastroLivro'>Cadastrar</button>
        <a href='cliente.php'><button type="button" class="btn btn-secondary">Voltar</button></a>
    </form>
    </div>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Lista - Livros</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Código do Livro</th>
                        <th>Titulo</th>
                        <th>Número de Cópias</th>
                        <th>Autor</th>
                        <th>Estado do Livro</th>
                        <th>Condição do Livro</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Código do Livro</th>
                        <th>Titulo</th>
                        <th>Número de Cópias</th>
                        <th>Autor</th>
                        <th>Estado do Livro</th>
                        <th>Condição do Livro</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach($livros as $l) : ?>
                    <tr>
                        <td><?=$l['id']?></td>
                        <td>
                            <a href="livro.php?id=<?=$l['id']?>">
                                <?=$l['titulo']?>
                            </a>
                        </td>
                        <td><?=$l['numero_copia']?></td>
                        <td><?=$l['autor']?></td>
                        <td><?=$l['estado_livro']?></td>
                        <td><?=$l['condicao_livro']?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>