<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de Usuários - Administração</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
   body {
    background-image: linear-gradient(135deg, #fbff00, #ff0000a9, black), /* gradiente com transparência */
    url('https://wallpapers-clan.com/wp-content/uploads/2025/06/chainsaw-man-power-celestial-demon-desktop-wallpaper-cover.jpg');                 /* imagem de fundo */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 30px;
    min-height: 112vh;
}
    .navbar {
      background-color: #c82333;
    }
    .footer {
      background-color: #c82333;
      color: white;
      text-align: center;
      padding: 10px 0;
    }
    .btn-editar {
      background-color: #ffc107;
      color: black;
    }
    .btn-excluir {
      background-color: #dc3545;
      color: white;
    }
  </style>
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
        <a href="cadastro_usuario.html" class="btn btn-success">ADICIONAR</a>
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

    
    