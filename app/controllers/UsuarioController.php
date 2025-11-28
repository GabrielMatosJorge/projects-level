<?php 

namespace App\Controllers;

// Importa o Model de Usuario
use App\Models\Usuario;

class UsuarioController{

    // Busca os usuarios e chama a tela de listar
    public function listar(){
        // Chama a model e a função que busca os dados e armazena na var
        $lista_usuarios = Usuario::buscarTodos();

        render("usuarios/lista_usuarios.php", [
            'title' => "Lista de Usuários",
            'usuarios' => $lista_usuarios
        ]); 

    }

    public function salvar () {
        // 1. limpa os dados, remove tudo que não for texto puro//

        $dados = [
            'nome' => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'cpf' => filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS),
            'data_nascimento' => $_POST['data_nascimento'] ?? '',
            'celular' => filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS),
            'rua' => filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS),
            'nome' => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'numero' => filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS),
            'bairro' => filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS),
            'cidade' => filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS),
            'cep' => filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS),
            'cidade' => filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS),
            'estado' => filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS),
            'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS),
            'nivel_de_acesso' => filter_input(INPUT_POST, 'nivel_de_acesso', FILTER_SANITIZE_SPECIAL_CHARS),
            'senha' => $_POST  ['senha'] ?? '',

        ];

        $erros = [];

        if (empty($dados['nome'])){
            $erros[] = 'o campo NOME não pode ficar em branco';
        } else if (strlen($dados['nome']) < 4 ) {  // verifica se o nome tem menos de 4 letras
            $erros[] = 'o campo NOME deve ter mais de 3 characteres';
        }


        if (empty($erros)) {
            $id = Usuario::salvar($dados);
            header('Location:  /usuarios');
        } else {
            $_SESSION['erros'] = $erros;
            $_SESSION['dados'] = $dados;
            header('Location: /usuarios/inserir');
        }
    }
}

?>