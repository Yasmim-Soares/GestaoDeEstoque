<?php

use PDO;
use PDOException;
$pdo = Conexao::getConexao();
class ItemModel{
    private $pdo;
    private $id;
    private $nome;
    private $quantidade;
    private $dataDeEntrada;
    private $preco;
    
    public function criarItem($nome, $quantidade, $dataDeEntrada, $preco){
        $sql = "INSERT INTO item (nome, quantidade, dataDeEntrada, preco)";

        try{
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$nome, $quantidade, $dataDeEntrada, $preco]);
        } catch (PDOException $e){
            echo "Erro na hora de criar item: $e";
        }
    }

    public function listarItens($busca) {
        $sql = "SELECT * FROM item";
        $param[];

        if(!empty($busca)){
            $sql = " WHERE nome LIKE :search OR dataDeEntrada LIKE :search";
            $params['search'] = "%" . $busca. "%"; 
        }

        $sql .= " ORDER BY nome ASC";
    }

    public function deletarQuantidade($id, $quantidade){
        $sql = "UPDATE item SET quantidade = quantidade - ?  WHERE id = ? and quantidade >= ?";

        try{
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(([$quantidade, $id, $quantidade]));
        } catch (PDOException $e) {
            echo "Problema na hora de deletar quantidade, erro: $e";
        }
    }

    public function deletar($id){
        $sql = "DELETE item WHERE id = ?";

        try{
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(($id));
        } catch (PDOException $e) {
            echo "Problema na hora de deletar, erro: $e";
        }
    }
}