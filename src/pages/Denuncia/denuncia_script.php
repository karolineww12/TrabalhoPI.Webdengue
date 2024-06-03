<title>Denuncia</title>

<?php
include_once("../conexao.php");


// Verificar se cada campo está definido antes de acessá-lo
$envolvido = isset($_POST['envolvido']) ? $_POST['envolvido'] : null;
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
$funcao = isset($_POST['funcao']) ? $_POST['funcao'] : null;
$destinatario = isset($_POST['destinatario']) ? $_POST['destinatario'] : null;
$uf = isset($_POST['uf']) ? $_POST['uf'] : null;
$municipio = isset($_POST['municipio']) ? $_POST['municipio'] : null;
$localidade = isset($_POST['localidade']) ? $_POST['localidade'] : null;
$organizacao = isset($_POST['organizacao']) ? $_POST['organizacao'] : null;
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;


// Prosseguir com a lógica de cadastro somente se todos os campos obrigatórios estiverem presentes
if ($envolvido && $cpf && $funcao && $destinatario && $uf && $municipio && $localidade && $organizacao && $descricao) {
    $sql = "INSERT INTO denuncia (envolvido, cpf, funcao, destinatario, uf, municipio, localidade, organizacao, descricao)
    VALUES ('$envolvido', '$cpf', '$funcao', '$destinatario', '$uf', '$municipio', '$localidade', '$organizacao', '$descricao')";

if (mysqli_query($conn, $sql)) {
    $denuncia = "Denúncia";
    echo("$denuncia cadastrado com sucesso");
} else {
    $denuncia = "Denúncia";
    echo("Erro ao cadastrar $denuncia: " . mysqli_error($conn));
}
} 
?>
<br>
<a href="denuncia.php" class="btn btn-primary">Voltar</a>
</br>