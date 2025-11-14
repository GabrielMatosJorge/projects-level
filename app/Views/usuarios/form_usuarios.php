<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tile?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
  
</head>

<body class="container">
  
    <form action="usuarios/lista_usuarios" method="get">
  <h3 class="mb-4">Cadastro de Usuários</h3>
  <div class="row mb-3 text-black fw-bold">
    
    <div class="col-md-6">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="col-md-6">
      <label for="senha" class="form-label">senha</label>
      <input type="number" class="form-control" id="senha" name="senha" required>
    </div>

  </div>


  <div class="row mb-3 text-black fw-bold">
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

   <div class="row mb-3 text-black fw-bold">
    <div class="col-md-6">
      <label for="celular" class="form-label">Celular</label>
      <input type="text" class="form-control" id="celular" name="celular">
    </div>
    <div class="col-md-6">
      <label for="nascimento" class="form-label">Data de Nascimento</label>
      <input type="date" class="form-control" id="nascimento" name="nascimento">
    </div>
  </div>

  <div class="row mb-3 text-black fw-bold">
    <div class="col-md-4">
      <label for="cep" class="form-label">CEP</label>
      <input type="text" class="form-control" id="cep" name="cep">
    </div>
    <div class="col-md-8">
      <label for="rua" class="form-label">Rua</label>
      <input type="text" class="form-control" id="rua" name="rua">
    </div>
    <div class="col-md-8">
      <label for="bairro" class="form-label">Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairro">
    </div>
  </div>

  <div class="row mb-3 text-black fw-bold">
    <div class="col-md-2">
      <label for="numero" class="form-label">Número</label>
      <input type="text" class="form-control" id="numero" name="numero">
    </div>
    <div class="col-md-4 text-black fw-bold">
      <label for="complemento" class="form-label">Complemento</label>
      <input type="text" class="form-control" id="complemento" name="complemento">
    </div>
    <div class="col-md-4 text-black fw-bold">
      <label for="cidade" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="cidade" name="cidade">
    </div>
    <div class="col-md-2 text-black fw-bold">
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

    <div class="row">
    <div class="col-md-12 text-end">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

     

