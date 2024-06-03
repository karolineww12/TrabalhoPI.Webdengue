
<title>Cadastro</title>

<?php
include_once("../conexao.php");


// Verificar se cada campo está definido antes de acessá-lo
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : null;
$data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : null;
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
$nacionalidade = isset($_POST['nacionalidade']) ? $_POST['nacionalidade'] : null;
$estado = isset($_POST['estado']) ? $_POST['estado'] : null;
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;

// Prosseguir com a lógica de cadastro somente se todos os campos obrigatórios estiverem presentes
if ($nome && $email && $senha && $cpf && $sexo && $data_nascimento && $telefone && $nacionalidade && $estado && $cidade) {
    $sql = "INSERT INTO `cadastro` (`nome`, `senha`, `cpf`, `sexo`, `telefone`, `nacionalidade`, `cidade`, `estado`, `email`, `data_nascimento`) 
            VALUES ('$nome','$senha','$cpf','$sexo','$telefone','$nacionalidade','$cidade','$estado','$email','$data_nascimento')";

if (mysqli_query($conn, $sql)) {
    echo("$nome cadastrado com sucesso");
} else {
    echo("Não foi possível cadastrar $nome");
}
} 
?>
<br>
<a href="register.php" class="btn btn-primary">Voltar</a>
</br>