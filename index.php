<php
$pdo = Conexao:getConexao;

$ItemModel = new ItemModel($pdo);

$acao = $_GET['acao'] ?? '';

switch($acao){
    case 'excluirQuantidade':
        $items = $ItemModel->excluirQuantidade($quantidade, $id);

        require_once('../view/listarItem.php');
        break;
}
