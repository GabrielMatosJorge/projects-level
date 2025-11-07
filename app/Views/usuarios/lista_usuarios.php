<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $tile?> </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
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
        <a href="usuarios/inserir" class="btn btn-success">ADICIONAR</a>
      </div>

      <table class="table table-bordered table-hover">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>CELULAR</th>
            <th>NÍVEL</th>
            <th>AÇÕES</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Usuário 1</td>
            <td>user1@example.com</td>
            <td>1234567890</td>
            <td>Usuário</td>
            <td>
              <a href="#" class="btn btn-editar">Editar</a>
              <a href="#" class="btn btn-excluir">Excluir</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Usuário 2</td>
            <td>user2@example.com</td>
            <td>9876543210</td>
            <td>Administrador</td>
            <td>
              <a href="#" class="btn btn-editar">Editar</a>
              <a href="#" class="btn btn-excluir">Excluir</a>
            </td>
          </tr>
        </tbody>
      </table>
    </main>

      <div class="row">
    <div class="col-md-12 text-end">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    
    