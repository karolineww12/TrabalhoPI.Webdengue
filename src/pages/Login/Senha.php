<?php

include_once("../conexao.php");


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Senha</title>
  <link rel="stylesheet" href="/public/css/community.css">
  <link rel="stylesheet" href="/src/pages/Senha/Senha.css">
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

  <body>
    <div class="senha-container">
        <img src="/public/imgs/Senha/senha.png" alt="Desenho de menina com celular na mão" class="login-image">
        <div class="login-form">
            <div class="login-title">Digite sua senha:</div>
            <input type="password" class="login-input" placeholder="Senha">
            <button class="login-button">Entrar</button>
            <div class="forgot-password"><a href="#">Esqueci minha senha</a></div>
        </div>
        
    </div>
</body>

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