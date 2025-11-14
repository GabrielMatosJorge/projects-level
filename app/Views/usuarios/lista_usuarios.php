<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $tile?> </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="container">
  <div class="d-flex flex-column min-vh-100">


    <nav class="navbar navbar-expand-lg navbar-dark px-4">
      <a class="navbar-brand" href="#">Administração</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>

    </nav>

    
    <main class="container my-3 flex-grow-1">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Listagem de Usuários</h2>
        <a href="/usuarios/inserir" class="btn btn-success">NOVO CLIENTE</a>
      </div>

      <table class="table table-bordered table-hover">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>CELULAR</th>
            <th>NÍVEL</th>
            <th>data de nascimento</th>
            <th>celular</th>
            <th>rua</th>
            <th>numero</th>
            <th>complemento</th>
            <th>bairro</th>
            <th>cidade</th>
            <th>cep</th>
            <th>estado</th>
    
          </tr>
        </thead>
        <tbody>
          <?php foreach($usuarios as $u):  ?>
          <tr>
            <td><?=  $u['id_usuario'] ?> </td>
            <td><?=  $u['nome'] ?></td>
            <td><?=  $u['cpf'] ?></td>
            <td><?=  $u['data_nascimento'] ?></td>
            <td><?=  $u['celular'] ?></td>
            <td><?=  $u['rua'] ?></td>
            <td><?=  $u['numero'] ?></td>
            <td><?=  $u['complemento'] ?></td>
            <td><?=  $u['bairro'] ?></td>
            <td><?=  $u['cidade'] ?></td>
            <td><?=  $u['cep'] ?></td>
            <td><?=  $u['estado'] ?></td>
            <td><?=  $u['email'] ?></td>
            <td><?=  $u['nivel_de_acesso'] ?></td>
          </tr>
           
          <?php endforeach ?>
          </tbody>            
      </table>

      <a href="#" class="btn btn-editar btn btn-primary">Editar</a>
      <a href="#" class="btn btn-excluir btn btn-danger">Excluir</a>
    </main>


</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    
    