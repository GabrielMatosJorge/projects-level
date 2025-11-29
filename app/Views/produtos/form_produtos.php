<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">

</head>

<body class="container">

<form action="/produtos/salvar" method="post">
  <h3 class="mb-4">Cadastro de Produtos</h3>

  <!-- NOME + COMPROVANTE -->
  <div class="row mb-3 text-black fw-bold">
    <div class="col-md-6">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>

    <div class="col-md-6">
      <label for="comprovante" class="form-label">Comprovante</label>
      <input type="text" class="form-control" id="comprovante" name="comprovante" required>
    </div>
  </div>

  <!-- CONTATO + DATA ENTREGA -->
  <div class="row mb-3 text-black fw-bold">
    <div class="col-md-6">
      <label for="contato" class="form-label">Contato</label>
      <input type="text" class="form-control" id="contato" name="contato">
    </div>

    <div class="col-md-6">
      <label for="data_entrega" class="form-label">Data de Entrega</label>
      <input type="date" class="form-control" id="data_entrega" name="data_entrega">
    </div>
  </div>

  <!-- CPF + TAMANHO PRODUTO -->
  <div class="row mb-3 text-black fw-bold">
    <div class="col-md-6">
      <label for="cpf" class="form-label">CPF</label>
      <input type="text" class="form-control" id="cpf" name="cpf">
    </div>

    <div class="col-md-6">
      <label for="tamanho_produto" class="form-label">Tamanho do Produto</label>
      <select class="form-select" id="tamanho_produto" name="tamanho_produto" required>
        <option value="">-- ESCOLHA --</option>
        <option value="admin">Grande</option>
        <option value="medio">Médio</option>
        <option value="pequeno">Pequeno</option>
      </select>
    </div>
  </div>

  <!-- CEP + ENDEREÇO -->
  <div class="row mb-3 text-black fw-bold">
    <div class="col-md-4">
      <label for="cep" class="form-label">CEP</label>
      <input type="text" class="form-control" id="cep" name="cep">
    </div>

    <div class="col-md-8">
      <label for="endereco" class="form-label">Endereço</label>
      <input type="text" class="form-control" id="endereco" name="endereco">
    </div>
  </div>

  <!-- NÚMERO + COMPLEMENTO + CIDADE -->
  <div class="row mb-3 text-black fw-bold">
    <div class="col-md-2">
      <label for="numero" class="form-label">Número</label>
      <input type="text" class="form-control" id="numero" name="numero">
    </div>

    <div class="col-md-4">
      <label for="complemento" class="form-label">Complemento</label>
      <input type="text" class="form-control" id="complemento" name="complemento">
    </div>

    <div class="col-md-6">
      <label for="cidade" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="cidade" name="cidade">
    </div>

  </div>

  <!-- BOTÃO -->
  <div class="row">
    <div class="col-md-12 text-end">
      <button type="submit" class="btn btn-primary" href= "/produtos/salvar">Cadastrar</button>

    </div>
  </div>

</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


