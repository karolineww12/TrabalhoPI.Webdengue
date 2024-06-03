<?php
session_start();
require 'conexao.php'; // Supondo que exista um arquivo de conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'];

    // Verificar se o CPF existe no banco de dados
    $query = "SELECT * FROM usuarios WHERE cpf = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $cpf);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // CPF existe, redirecionar para a página de inserção de senha
        $_SESSION['cpf'] = $cpf;
        header('Location: senha.php');
        exit();
    } else {
        // CPF não existe
        $erro = "CPF inválido";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="login.php">
        <input type="text" name="cpf" placeholder="Digite seu CPF" required>
        <button type="submit">Continuar</button>
    </form>
    <?php if (isset($erro)) echo "<p>$erro</p>"; ?>
</body>
</html>
