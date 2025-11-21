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



  <main class="container my-5">
   <h2 class="mb-4">Lista de Produtos</h2>
    
   <table class="table table-bordered table-hover">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>CELULAR</th>
            
            <th>data de nascimento</th>
            <th>numero</th>
            <th>bairro</th>
            <th>cidade</th> 
            <th>cep</th>
            <th>estado</th>
            <th>nivel</th>

    
          </tr>
        </thead>
        <tbody>
          <?php foreach($produtos as $u):  ?>
          <tr>
            <td><?=  $u['id_produto'] ?> </td>
            <td><?=  $u['nome'] ?></td>
            <td><?=  $u['email'] ?></td>
            <td><?=  $u['celular'] ?></td>
            <td><?=  $u['data_nascimento'] ?></td>
            <td><?=  $u['numero'] ?></td>
            <td><?=  $u['bairro'] ?></td>
            <td><?=  $u['cidade'] ?></td>
            <td><?=  $u['cep'] ?></td>
            <td><?=  $u['estado'] ?></td>
            <td><?=  $u['nivel_de_acesso'] ?></td>
          </tr>
           
          <?php endforeach ?>
          </tbody>            
      </table>
  
  </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>