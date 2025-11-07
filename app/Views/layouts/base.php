<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/styles.css"> 
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark px-4">
    <a class="navbar-brand" href="#">Gestão de Produtos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <ul>
            <li><a class="dropdown-item" href="/usuarios">Listagem de Usuários</a></li>
            <li><a class="dropdown-item" href="/usuarios/inserir">Cadastro de Usuários</a></li>
            <li><a class="dropdown-item" href="/home">dashboard</a></li>
          </ul>
        </li>
      </ul>

            <form class="d-flex me-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Procurar">
        <button class="btn btn-light" type="submit">Buscar</button>
      </form>
      <a href="index.html" class="btn btn-dark">SAIR</a>
    </div>
  </nav>

  <div class="container my-5 text-center">
    <div class="container bg-light">
      <?= $content ?>
    </div>
  </div>


</body>
</html>
