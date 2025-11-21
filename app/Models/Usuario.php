<?php 
// em qual pasta ela está
namespace App\Models;

use PDO;
use App\Core\Database;
use PDOException;

// mesmo nome do arquivo
class Usuario {

    // aqui declaramos uma função para cada operação do CRUD

    // busca todos os usuarios no BD
    public static function buscarTodos () {
        // PRIMEIRO VAMOS CONECTAR NO BANCO DE DADOS
        // PRECISAREMOS IMPORTAR O PDO ANTES DE CRIAR A CLASSE
        $pdo = Database::conectar();
        
    $sql = "SELECT * FROM usuarios";

    
    return $pdo->query($sql)->fetchALL();
    }

    public static function salvar($dados) {
        try{
            $pdo = Database::conectar();

            $senha_criptografada = password_hash($dados['senha'], PASSWORD_BCRYPT);

            $sql = "INSERT INTO usuarios 
                (nome, cpf, data_nascimento, celular, rua, numero, bairro, cidade, cep, estado, email, nivel_de_acesso) 
                VALUES 
                (:nome, :cpf, :data_nascimento, :celular, :rua, :numero, :bairro, :cidade, :cep, :estado, :email, :nivel_de_acesso)";

           $stmt = $pdo->prepare($sql);
           $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
        } catch (PDOException $e) {
            echo "Erro ao Inserir: " . $e->getMessage();
            exit;
        }
    }
        
 

}
