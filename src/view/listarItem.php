<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Estoque</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preco</th>
                <th>Data de Entrada</th>
                <th>Total</th>
                <th>Ações</th>
            </tr>
        </thead>
    <tbody>
        <?php
            foreach($items as $item)
            echo "<td>". htmlespecialchars($item['Nome']) ."</td>";
            echo "<td>". number($item['Quantidade'])."</td>";
            echo "<td>". number_format($item['Preco'], 2, ',', '.')."</td>";
            echo "<td>". $item['dataDeEntrada']."</td>";
            echo "<td>". number_format($item['Total'], 2, ',', '.') ."</td>";
            echo "<td>";
            echo "<a href='index.php?acao='excluirQuantidade&'>".[$item['deletarQuantidade']]."</a>";
            echo"</td>";
        ?>
    </tbody>
    </table>
</body>
</html>