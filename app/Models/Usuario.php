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

            $stmt->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);

            $stmt->bindParam(':data_nascimento', $dados['data_nascimento']);

            $stmt->bindParam(':celular', $dados['celular'], PDO::PARAM_STR);

            $stmt->bindParam(':nivel_de_acesso', $dados['nivel_de_acesso'], PDO::PARAM_STR);

            $stmt->bindParam(':rua', $dados['rua'], PDO::PARAM_STR);

            $stmt->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);

            $stmt->bindParam(':bairro', $dados['bairro'], PDO::PARAM_STR);

            $stmt->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);

            $stmt->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);

            $stmt->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);

            $stmt->bindParam(':email', $dados['email'], PDO::PARAM_STR);

            $stmt -> execute();

            return (int) $pdo -> lastInsertId();

        } catch (PDOException $e) {
            echo "Erro ao Inserir: " . $e->getMessage();
            exit;
        }
    }
        
 

}
