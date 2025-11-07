<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $tile?> </title>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">
            Usuários
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/usuarios">Listagem de Usuários</a></li>
            <li><a class="dropdown-item" href="/usuarios/inserir">Cadastro de Usuários</a></li>
            <li><a class="dropdown-item" href="/produtos">produtos</a></li>
            <li><a class="dropdown-item" href="/produtos/sobre">cadastrar Produtos</a></li>
          </ul>
        </li>
      </ul>

          <main class="container my-5">
  <h2 class="mb-4">Lista de Produtos</h2>

  <ul class="list-group">
    <li
      class="list-group-item d-flex flex-wrap justify-content-between align-items-center">
      <div class="col-12 col-md-9">
        <strong class="me-2">Nome:</strong>
        <span>Corrediça de 40cm Telescópica Larga</span>
        <br />

        <strong class="me-2">Descrição do Produto:</strong>
        <span>Ferragem essencial para móveis, que proporcionam o movimento
          suave de abertura e fechamento de gavetas e prateleiras.</span>
        <br />

        <strong class="me-2">Quantidade em Estoque:</strong>
        <span>32</span>
        <br />

        <strong class="me-2">Valor Unitário:</strong>
        <span>R$ 37,00 / Unidade</span> <br />

        <strong class="me-2">Categoria:</strong>
        <span>Ferragens</span>
      </div>

      <div class="col-12 col-md-3 text-md-end mt-3 mt-md-0">
        <button class="btn btn-warning btn-sm me-2">Editar</button>

        <button class="btn btn-danger btn-sm">Excluir</button>
      </div>
    </li>

    <li
      class="list-group-item d-flex flex-wrap justify-content-between align-items-center">
      <div class="col-12 col-md-9">
        <strong class="me-2">Nome:</strong>
        <span>Caixa Parafuso 3,5x40 - 1000pc</span>
        <br />

        <strong class="me-2">Descrição do Produto:</strong>
        <span>O elemento essencial de fixação de duas ou mais superfícies, combinadas ou em junções diferentes</span>
        <br />

        <strong class="me-2">Quantidade em Estoque:</strong>
        <span>12</span>
        <br />

        <strong class="me-2">Valor Unitário:</strong>
        <span>R$ 55,00 / Unidade</span> <br />

        <strong class="me-2">Categoria:</strong>
        <span>Buchas e Parafusos</span>
      </div>
    </li>
  </ul>
</main>