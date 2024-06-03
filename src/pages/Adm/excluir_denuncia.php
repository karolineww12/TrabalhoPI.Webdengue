<?php
// Verifique se o ID da denúncia foi enviado
if(isset($_POST['id_denuncia'])) {
    $id_denuncia = $_POST['id_denuncia'];
    
    // Inclua o arquivo de conexão com o banco de dados
    include_once("../conexao.php");
    
    // Consulta SQL para excluir a denúncia do banco de dados
    $sql = "DELETE FROM denuncia WHERE id_denuncia = $id_denuncia"; // Corrigido para 'id_denuncia'
    
    if (mysqli_query($conn, $sql)) {
        echo "Denúncia excluída com sucesso.";
    } else {
        echo "Erro ao excluir denúncia: " . mysqli_error($conn);
    }
    
    // Feche a conexão com o banco de dados
    mysqli_close($conn);
} else {
    echo "ID da denúncia não fornecido.";
}
?>

<br>
<a href="adm.php" class="btn btn-primary">Voltar</a>
</br>