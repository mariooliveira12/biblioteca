<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Livro #<?=$livro['id']?></h1>
 <!-- Basic Card Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Atualização</h6>
    </div>
    <div class="card-body">
    <form action='livro.php' method='post'>
        <input type='hidden' name='id' value='<?=$livro['id']?>'>
        <div class="form-group">
            <label>Titulo</label>
            <input value='<?=$livro['titulo']?>' type="text" class="form-control" name="titulo">
        </div>
        <div class="form-group">
            <label>Número de Cópias</label>
            <input value='<?=$livro['numero_copia']?>' type="text" class="form-control" name="numero_copia">
        </div>
        <div class="form-group">
            <label>Autor</label>
            <input value='<?=$livro['autor']?>' type="text" class="form-control" name="autor">
        </div>
        <div class="form-group">
            <label>Estado do Livro</label>
            <input value='<?=$livro['estado_livro']?>' type="text" class="form-control" name="estado_livro">
        </div>
        <div class="form-group">
            <label>Condição do Livro</label>
            <input value='<?=$livro['condicao_livro']?>' type="text" class="form-control" name="condicao_livro">
        </div>
        <a href='usuario.php' class='btn btn-secondary'>Cancelar</a>
        <a href='livro.php?excluir=<?=$livro['id']?>' class='btn btn-danger'>Excluir</a>
        <button type="submit" class="btn btn-primary" name='atualizar'>Atualizar</button>
    </form>
    </div>
</div>