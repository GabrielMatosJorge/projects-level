<?php
// Importa o autoload do computador para carregar as rotas //
require __DIR__ . '/../vendor/autoload.php';

function render($view, $data = []) 
{
  // extrai os dados recebidos e converte em variáveis //
  extract($data);
  ob_start();
  // inclui a tela que enviamos específica // 
  require __DIR__ . '/../app/Views/' . $view;
  $content = ob_get_clean();
  require __DIR__ . '/../app/views/layouts/base.php';

}

function render_sem_template($view, $data = []) 
{
  // extrai os dados recebidos e converte em variáveis //
  extract($data);
  ob_start();
  // inclui a tela que enviamos específica // 
  require __DIR__ . '/../app/Views/' . $view;
}

// Obtem a URL do navegador; //
$url = parse_url($_SERVER ['REQUEST_URI'], PHP_URL_PATH);

if ($url == "/" || $url === '/index.php') {
  render_sem_template('home.php', [
    'title' => 'Bem-Vindo!',
    'lenda' => 'Agora eu sou a lenda do PHP!',
  ]);
} else if ($url == "/sobre"){
  render('sobre.php', [ 'title' => 'sobre a página']);
}

//usuarios

else if ($url == "/usuarios"){
  render('usuarios/lista_usuarios.php', [ 'title' => 'listar usuario']);
}else if ($url == "/usuarios/inserir"){
  render('usuarios/form_usuarios.php', [ 'title' => 'cadastrar usuarios']);
}

else if ($url == "/produtos"){
  render('produtos/lista_produtos.php', [ 'title' => 'listar produtos']);
}else if ($url == "/produtos/sobre"){
  render('produtos/form_produtos.php', [ 'title' => 'cadastrar produtos']);
}

?>