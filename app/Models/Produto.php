<?php

namespace App\Models;

use PDO;
use App\Core\Database;
use PDOException;


class Produto {

    public static function buscarTodos(){

        $pdo = Database::conectar();


        $sql = "SELECT * FROM produtos";

        
        return $pdo->query($sql)->fetchAll();
    }

    public static function salvar($dados){
        try {
            $pdo = Database::conectar();

            $sql = "INSERT INTO produtos 
            (nome, comprovante, contato, data_entrega, cpf, tamanho_produto, cep, endereco, numero, complemento, cidade)
            VALUES 
            (:nome, :comprovante, :contato, :data_entrega, :cpf, :tamanho_produto, :cep, :endereco, :numero, :complemento, :cidade)";

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':nome',            $dados['nome']);
            $stmt->bindParam(':comprovante',     $dados['comprovante']);
            $stmt->bindParam(':contato',         $dados['contato']);
            $stmt->bindParam(':data_entrega',    $dados['data_entrega']);
            $stmt->bindParam(':cpf',             $dados['cpf']);
            $stmt->bindParam(':tamanho_produto', $dados['tamanho_produto']);
            $stmt->bindParam(':cep',             $dados['cep']);
            $stmt->bindParam(':endereco',        $dados['endereco']);
            $stmt->bindParam(':numero',          $dados['numero']);
            $stmt->bindParam(':complemento',     $dados['complemento']);
            $stmt->bindParam(':cidade',          $dados['cidade']);

            $stmt->execute();

            return $pdo->lastInsertId();

        } catch (PDOException $e) {
            echo "Erro ao inserir: " . $e->getMessage();
            exit;
        }
    }
}
