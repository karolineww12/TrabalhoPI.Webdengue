<?php
include_once("../conexao.php");

// Consulta SQL para selecionar todas as denúncias
$sql = "SELECT * FROM denuncia";
$resultado = mysqli_query($conn, $sql);

// Verificar se há resultados
if (mysqli_num_rows($resultado) > 0) {
    // Exibir os resultados em uma tabela
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Envolvido</th>
                <th>CPF</th>
                <th>Função</th>
                <th>Destino</th>
                <th>UF</th>
                <th>Município</th>
                <th>Localidade</th>
                <th>Organização</th>
                <th>Descrição</th>
            </tr>";

    // Iterar sobre os resultados
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['envolvido']}</td>
                <td>{$row['cpf']}</td>
                <td>{$row['funcao']}</td>
                <td>{$row['destino']}</td>
                <td>{$row['uf']}</td>
                <td>{$row['municipio']}</td>
                <td>{$row['localidade']}</td>
                <td>{$row['organizacao']}</td>
                <td>{$row['descricao']}</td>
            </tr>";
    }

    echo "</table>";
} 

// Fechar a conexão
//mysqli_close($conn);
?>