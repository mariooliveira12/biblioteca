<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Aluno: <?=$cliente['email']?></h1>
 <!-- Basic Card Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Atualização</h6>
    </div>
    <div class="card-body">
    <form action='cliente.php' method='post'>
        <input type='hidden' name='id' value='<?=$cliente['email']?>'>
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input value='<?=$cliente['nome']?>' type="text" class="form-control" name="nome">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input value='<?=$cliente['email']?>' type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input value='<?=$cliente['telefone']?>' type="text" class="form-control" name="telefone">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input value='<?=$cliente['senha']?>' type="text" class="form-control" name="senha">
        </div>
        <a href='cliente.php' class='btn btn-secondary'>Cancelar</a>
        <a href='cliente.php?excluir=<?=$cliente['email']?>' class='btn btn-danger'>Excluir</a>
        <button type="submit" class="btn btn-primary" name='atualizar'>Atualizar</button>
    </form>
    </div>
</div>