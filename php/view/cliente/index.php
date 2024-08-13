 <html>
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Aluno</h1>
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
        <h6 class="m-0 font-weight-bold text-primary">Cadastro Aluno</h6>
    </div>
    <div class="card-body">
    <form action='' method='post'>
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" required>
        </div>
        <button type="submit" class="btn btn-success" name='cadastroCliente'>Cadastrar</button>
    </form>
    </div>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Lista - Alunos</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Senha</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Senha</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach($clientes as $c) : ?>
                    <tr>
                        <td><?=$c['nome']?></td>
                        <td>
                            <a href="cliente.php?email=<?=$c['email']?>">
                                <?=$c['email']?>
                            </a>
                        </td>                      
                        <td><?=$c['telefone']?></td>
                        <td><?=$c['senha']?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</html>