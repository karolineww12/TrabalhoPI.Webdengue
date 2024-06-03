<?php
session_start();
require 'conexao.php'; // Supondo que exista um arquivo de conexão com o banco de dados

if (!isset($_SESSION['cpf'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_SESSION['cpf'];
    $senha = $_POST['senha'];

    // Verificar se a senha está correta
    $query = "SELECT * FROM usuarios WHERE cpf = ? AND senha = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $cpf, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        if ($usuario['tipo_usuario'] == 'adm') {
            // Usuário é administrador
            header('Location: adm.php');
        } else {
            // Usuário é comum
            header('Location: index.php');
        }
        exit();
    } else {
        // Senha incorreta
        $erro = "Senha inválida";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Senha</title>
</head>
<body>
    <form method="POST" action="senha.php">
        <input type="password" name="senha" placeholder="Digite sua senha" required>
        <button type="submit">Entrar</button>
    </form>
    <?php if (isset($erro)) echo "<p>$erro</p>"; ?>
</body>
</html>
