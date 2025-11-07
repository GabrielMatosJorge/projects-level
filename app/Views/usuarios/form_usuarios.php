<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
  
</head>

<body>
    <form class="container mt-4 p-4 rounded shadow" action="usuarios/lista_usuarios" method="get">
  <h3 class="mb-4">Cadastro de Usuários</h3>
  <div class="row mb-3">
    <div class="col-md-6">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label for="celular" class="form-label">Celular</label>
      <input type="text" class="form-control" id="celular" name="celular">
    </div>
    <div class="col-md-6">
      <label for="nascimento" class="form-label">Data de Nascimento</label>
      <input type="date" class="form-control" id="nascimento" name="nascimento">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label for="cpf" class="form-label">CPF</label>
      <input type="text" class="form-control" id="cpf" name="cpf">
    </div>
    <div class="col-md-6">
      <label for="nivel" class="form-label">Nível de Acesso</label>
      <select class="form-select" id="nivel" name="nivel" required>
        <option value="">-- ESCOLHA --</option>
        <option value="admin">Administrador</option>
        <option value="usuario">Usuário</option>
      </select>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-4">
      <label for="cep" class="form-label">CEP</label>
      <input type="text" class="form-control" id="cep" name="cep">
    </div>
    <div class="col-md-8">
      <label for="endereco" class="form-label">Endereço</label>
      <input type="text" class="form-control" id="endereco" name="endereco">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-2">
      <label for="numero" class="form-label">Número</label>
      <input type="text" class="form-control" id="numero" name="numero">
    </div>
    <div class="col-md-4">
      <label for="complemento" class="form-label">Complemento</label>
      <input type="text" class="form-control" id="complemento" name="complemento">
    </div>
    <div class="col-md-4">
      <label for="cidade" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="cidade" name="cidade">
    </div>
    <div class="col-md-2">
      <label for="estado" class="form-label">Estado</label>
      <select class="form-select" id="estado" name="estado">
        <option value="">-- ESCOLHA --</option>
        <option value="SP">SÃO PAULO</option>
        <option value="RJ">RIO DE JANEIRO</option>
        <option value="MG">MINAS GERAIS</option>
        <option value="RS">RIO GRANDE DO SUL</option>
        <option value="RN">RIO GRANDE DO NORTE</option>
      </select>
    </div>
  </div>

