<?php

include_once("../conexao.php");


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/public/css/community.css">
  <link rel="stylesheet" href="/src/pages/Login/Login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <img src="/public/imgs/Home/LogoGOV.png" alt="Logo do governo federal">
    <div class="menu">
      <a href="/src/pages/Home/index.html">Home</a>
      <a href="/src/pages/Transparencia/transparencia.html">Transparência</a>
      <a href="/src/pages/LGPD/LGPD.html">LGPD</a>
      <a href="/src/pages/FAQ/faq.html">FAQ</a>
      <a href="/src/pages/Denuncia/denuncia.php">Denuncia Anônima</a>
      <a href="/src/pages/Servidor/sevidor.html">Fala Servidor</a>
    </div>

    <i class="hamburguer fa-solid fa-bars fa-2xl"></i>

  </header>

  <div class="container">
      <img src="/public\imgs\Login\conta_gov.png" alt="Senhora usando celular" class="image">
      <div class="login-area">
          <h2>Área de login:</h2>
          <form method="post" action="">
            <label for="cpf">Identifique-se no gov.br com:</label>
              <br>
              <label for="cpf">Número do CPF</label>
              <input type="text" name="cpf" placeholder="Digite seu CPF">
              <a href="/src/pages/Register/register.php" class="register-link">Cadastrar-se</a>
              <button type="submit">Continuar</button>
          </form>

          <?php

            if (isset($_POST['cpf'])) {
              $cpf = $_POST['cpf'];

              if ($cpf = "10562645942") {
                header("location: Senha.php");

              } else {
                echo "CPF inválido";
              }
            }

          ?>

       

          <div class="help">
              <p>Está com dúvidas e precisa de ajuda?</p>
              <a href="/src/pages/Servidor/sevidor.html">Acesse o Fala Servidor</a>
              <a href="/src/pages/LGPD/LGPD.html">LGPD</a>
          </div>
      </div>
  </div>

<footer>
    <img src="/public/imgs/Home/LogoGOV.png" alt="Logo do governo federal">
    <div class="info">
      <div class="avl">
        <p>Avalie nosso site</p>
        <textarea name="avl" id="avl" cols="45" rows="6" placeholder="Escreva sua avaliação aqui..."></textarea>
        <input type="button" value="Enviar" id="btnavl">
      </div>
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