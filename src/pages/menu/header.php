<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home_Page_Dengue</title>
  <link rel="stylesheet" href="/public/css/community.css">
  <link rel="stylesheet" href="/src/pages/Home/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="\src\pages\menu\style.css"><!-- stylesheet menu-->
</head>

<body>
  <header>
    <nav class="nav-bar">
      <div class="logo">
          <img src="/public/imgs/Home/LogoGOV.png" alt="Logo do governo federal">
      </div>
      <div class="nav-list">
        <ul>
          <li class="nav-item"><a href="">Inicio</a></li>
          <li class="nav-item"><a href="/src/pages/Transparencia/transparencia.html">Transparência</a></li>
          <li class="nav-item"><a href="/src/pages/LGPD/LGPD.html">LGPD</a></li>
          <li class="nav-item"> <a href="/src/pages/FAQ/faq.html">FAQ</a></li>
          <li class="nav-item"><a href="/src/pages/Denuncia/denuncia.php">Denuncia Anônima</a></li>
          <li class="nav-item"><a href="/src/pages/Servidor/sevidor.html">Fala Servidor</a></li>
        </ul>
      </div>
      <div class="login-button">
        <button><a href="#">Entrar</a></button>
      </div>

      <div class="mobile-menu-icon"><!--realiza a troca do icone do botão -->
        <button onclick="menuShow()"><img class="icon" src="/public/imgs/Menu/menu_white_36dp.svg" alt=""></button>
      </div>
      </nav>
      <div class="mobile-menu">
        <ul>
          <li class="nav-item"><a href="">Inicio</a></li>
          <li class="nav-item"><a href="/src/pages/Transparencia/transparencia.html">Transparência</a></li>
          <li class="nav-item"><a href="/src/pages/LGPD/LGPD.html">LGPD</a></li>
          <li class="nav-item"> <a href="/src/pages/FAQ/faq.html">FAQ</a></li>
          <li class="nav-item"><a href="/src/pages/Denuncia/denuncia.php">Denuncia Anônima</a></li>
          <li class="nav-item"><a href="/src/pages/Servidor/sevidor.html">Fala Servidor</a></li>
        </ul>

      <div class="login-button">
        <button><a href="#">Entrar</a></button>
      </div>
      </div>
      <script src="\src\pages\menu\script.js"></script>
  </header>
</body>

</html>