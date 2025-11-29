<?php 

namespace App\Controllers;

// Importa o Model de Usuario
use App\Models\Produto;

class ProdutoController{

    // Busca os produtos e chama a tela de listar
    public function listar(){
        // Chama a model e a função que busca os dados e armazena na var
        $lista_produtos = Produto::buscarTodos();

        render("produtos/lista_produtos.php", [
            'title' => "Lista de Produtos",
            'produtos' => $lista_produtos
        ]); 

    }

        public function salvar()
    {
        $dados = [
            'nome'            => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'comprovante'     => filter_input(INPUT_POST, 'comprovante', FILTER_SANITIZE_SPECIAL_CHARS),
            'contato'         => filter_input(INPUT_POST, 'contato', FILTER_SANITIZE_SPECIAL_CHARS),
            'data_entrega'    => filter_input(INPUT_POST, 'data_entrega', FILTER_SANITIZE_SPECIAL_CHARS),
            'cpf'             => filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS),
            'tamanho_produto' => filter_input(INPUT_POST, 'tamanho_produto', FILTER_SANITIZE_SPECIAL_CHARS),
            'cep'             => filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS),
            'endereco'        => filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS),
            'numero'          => filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS),
            'complemento'     => filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS),
            'cidade'          => filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS),
        ];

        $erros = [];

        if (empty($dados['nome'])) {
            $erros[] = 'O campo NOME não pode ficar em branco!';
        } else if (strlen($dados['nome']) < 4) {
            $erros[] = 'O campo NOME deve ser mais que 3 caracteres!';
        }

        if (empty($erros)) {
            Produto::salvar($dados);
            // Redireciona para a lista de produtos
            header('Location: /produtos/listar');
            exit;
        } else {
            $_SESSION['erros'] = $erros;
            $_SESSION['dados'] = $dados;
            // Redireciona de volta para o formulário
            header('Location: /produtos/inserir');
            exit;
        }
    }

}


 
?>