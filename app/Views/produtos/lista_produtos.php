<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title?> </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/styles.css"> 
  
</head>

  
<body class="container">



  <main class="container my-5">
   <h2 class="mb-4">Lista de Produtos</h2>
    
   <table class="table table-bordered table-hover">
        <thead class="table-light">
         
        <tr>
          <th>ID</th>
          <th>NOME</th>
          <th>COMPROVANTE (CPF)</th>
          <th>CONTATO</th>
          <th>DATA DE ENTREGA</th>
          <th>CPF</th>
          <th>TAMANHO DO PRODUTO</th>
          <th>CEP</th>
          <th>ENDEREÇO</th>
          <th>NÚMERO</th>
          <th>COMPLEMENTO</th>
          <th>CIDADE</th>
        </tr> 
        </thead>

<tbody>
<?php if (!empty($produtos)): ?>
    <?php foreach($produtos as $u): ?>
      <tr>
        <td><?= $u['id_produto'] ?></td>
        <td><?= $u['nome'] ?></td>
        <td><?= $u['comprovante'] ?></td>
        <td><?= $u['contato'] ?></td>
        <td><?= $u['data_entrega'] ?></td>
        <td><?= $u['cpf'] ?></td>
        <td><?= $u['tamanho_produto'] ?></td>
        <td><?= $u['cep'] ?></td>
        <td><?= $u['endereco'] ?></td>
        <td><?= $u['numero'] ?></td>
        <td><?= $u['complemento'] ?></td>
        <td><?= $u['cidade'] ?></td>
        </tr>
        <?php endforeach; ?>

   
        <?php endif; ?>

       </tbody>            
      </table> 
      <br>
         <a href="/produtos/inserir" class="btn btn-success">novo produto</a>

      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>