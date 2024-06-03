<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <link rel="stylesheet" href="/public/css/community.css">
  <link rel="stylesheet" href="/src/pages/Usuario/usuario.php">
  <link rel="stylesheet" href="/src/pages/Adm/adm.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./../index.css">
</head>

<body>
  <?php
  require_once "./../menu/header.php";
  //include_once("../conexao.php");


?>
  
  <br>

    <div class="func1">
      <div class="float hspace">
        <a href="/src/pages/LocalVac/LocalVac.php">Locais de Vacinação</a>
        <a href="/src/pages/LocalRisc/LocalRisc.php">Locais de Risco</a>
        <a href="/src/pages/TotalVac/TotalVac.php">Total de Vacinados</a>
      </div>
    </div>
       <span class="regua"></span>

    <div class="func1">
      <h2>Denúncias</h2>
    </div>

    <div class="container1">
    <?php
    include_once("../conexao.php");
    

    // Consulta SQL para selecionar todas as denúncias
    $sql = "SELECT * FROM denuncia";
    $resultado = mysqli_query($conn, $sql);

    // Verificar se há resultados
    if (mysqli_num_rows($resultado) > 0) {
        // Iterar sobre os resultados
        while ($row = mysqli_fetch_assoc($resultado)) {
          echo "<div class='denuncia'>
                  <div class='form-group'>
                      <label for='nome'>Nome do Envolvido:</label>
                      <span>{$row['envolvido']}</span>
                  </div>
                  <div class='form-group'>
                      <label for='cpf'>CPF do Envolvido:</label>
                      <span>{$row['cpf']}</span>
                  </div>
                  <div class='form-group'>
                      <label for='orgEmpresa'>Órgão/Empresa:</label>
                      <span>{$row['organizacao']}</span>
                  </div>
                  <div class='form-group'>
                      <label for='funcao'>Função do Envolvido:</label>
                      <span>{$row['funcao']}</span>
                  </div>
                  <div class='form-group'>
                      <label for='UF'>UF:</label>
                      <span>{$row['uf']}</span>
                  </div>
                  <div class='form-group'>
                      <label for='local'>LOCAL:</label>
                      <span>{$row['localidade']}</span>
                  </div>
                  <div class='form-group'>
                      <label for='descricao'>Descrição do fato:</label>
                      <span>{$row['descricao']}</span>
                  </div>
                  
                  <form action='excluir_denuncia.php' method='post'>
    <input type='hidden' name='id_denuncia' value='{$row['id_denuncia']}' /> <!-- Ajustado para 'id_denuncia' -->
    <button type='submit'>Excluir</button>
</form>
              </form>
            </div>";
            echo "<hr>";
                
      }

    }
    ?>
    </div>

    <div class="func1">
      <h2>Avaliações</h2>
    </div>

    <div class="container2">
      <label class="form-text" for="avaliacao">Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
        took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
        software like Aldus PageMaker including versions of Lorem Ipsum.</label>
    </div>

    <div class="container2">
      <label class="form-text" for="avaliacao">Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
        took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
        software like Aldus PageMaker including versions of Lorem Ipsum.</label>
    </div>

    <div class="escrever-noticia">
    <h2>Notícias -></h2>
    <p>Escreva ou Edite uma notícia aqui -> </p>
    <a href="edit.html" class="botao-escrever-noticia">Escrever/Editar Notícia</a>
</div>




  </main>
  <footer>
    <img src="/public/imgs/Home/LogoGOV.png" alt="Logo do governo federal">
    <div class="info">
      <div class="flexcolumn">
        <p id="txtfooter">Redes Sociais</p>
        <div class="midia">
          <i class="fa-brands fa-x-twitter fa-xl"></i>
          <i class="fa-brands fa-youtube fa-xl"></i>
          <i class="fa-brands fa-facebook fa-xl"></i>
          <i class="fa-brands fa-instagram fa-xl"></i>
          <i class="fa-brands fa-soundcloud fa-xl"></i>
          <i class="fa-brands fa-flickr fa-xl"></i>
          <i class="fa-brands fa-linkedin fa-xl"></i>
        </div>
      </div>
    </div>
    <div class="flexrow" id="final">
      <p><i class="fa-regular fa-copyright fa-2xs"></i> Todos os direitos reservados</p>
    </div>
  </footer>
</body>
</html>