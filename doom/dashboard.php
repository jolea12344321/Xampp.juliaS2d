<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

$produtos = [
    ['nome' => 'Tênis Air Max', 'descricao' => 'Confortável e estiloso', 'preco' => 350],
    ['nome' => 'Tênis Run Fast', 'descricao' => 'Ideal para corrida', 'preco' => 280],
     ['nome' => 'Puma', 'descricao' => 'Super estiloso', 'preco' => 224,90],
    ['nome' => 'Nike', 'descricao' => 'Otimo para todas ocasioões', 'preco' => 300],
    ['nome' => 'Adidas', 'descricao' => 'Alta qualidade', 'preco' => 660],
];

$contatos = [
    ['nome' => 'Maria', 'email' => 'maria@email.com', 'mensagem' => 'Quero saber sobre o Air Max'],
    ['nome' => 'João', 'email' => 'joao@email.com', 'mensagem' => 'Qual o prazo de entrega?'],
    ['nome' => 'Henrique', 'email' => 'henrique@email.com', 'mensagem' => 'Vou querer o adidas e nike'],
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Loja de Tênis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="logout.php" class="logout">Sair</a>

    <h1>Bem-vinda(o), <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h1>

    <h2>Produtos</h2>
    <table>
        <tr><th>Nome</th><th>Descrição</th><th>Preço (R$)</th></tr>
        <?php foreach ($produtos as $p): ?>
        <tr>
            <td><?php echo htmlspecialchars($p['nome']); ?></td>
            <td><?php echo htmlspecialchars($p['descricao']); ?></td>
            <td><?php echo number_format($p['preco'], 2, ',', '.'); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Contatos</h2>
    <table>
        <tr><th>Nome</th><th>Email</th><th>Mensagem</th></tr>
        <?php foreach ($contatos as $c): ?>
        <tr>
            <td><?php echo htmlspecialchars($c['nome']); ?></td>
            <td><?php echo htmlspecialchars($c['email']); ?></td>
            <td><?php echo htmlspecialchars($c['mensagem']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
