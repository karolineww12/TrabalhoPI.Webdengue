<?php

include_once("../conexao.php");


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="/public/css/community.css">
  <link rel="stylesheet" href="/src/pages/Register/register.css">
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
    <div id="login">
      <a href="/src/pages/Login/Login.php"><i class="fa-solid fa-user fa-2xl"></i> Login</a>
    </div>

    <i class="hamburguer fa-solid fa-bars fa-2xl"></i>

  </header>

  <main>
    <div class="container">
      <h1>Faça seu cadastro</h1>
      <p>Os campos sinalizados com asterisco * são de preenchimento  obrigatório.</p>
      <form action="register_script.php" method="POST">
        <label for="nome">Nome*</label>
        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" required>
        <hr>

        <label for="email">Email*</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu e-mail" required>
        <hr>

        <label for="senha">Senha*</label>
        <input type="password" class="form-control" name="senha" placeholder="Digite sua senha" required>
        <hr>

        <label for="cpf">CPF*</label>
        <input type="text" class="form-control" name="cpf" data-mask="000.000.000-00" required>
        <hr>

        <label for="sexo">Sexo:</label>
        <select name="sexo">
            <option value="">-----------------</option>
            <option value="1">Masculino</option>
            <option value="2">Feminino</option>
        </select>
        <br>
        <hr>

        <label for="data_nascimento">Data de nascimento</label>
        <input type="date" class="form-control" name="data_nascimento" required>
        <hr>

        <label for="telefone">Telefone*:</label>
        <input type="text" class="form-control" name="telefone" data-mask="(99) 9999-9999" required>
        <hr>

        <label for="nacionalidade">Nacionalidade:</label>
        <input type="text" class="form-control" name="nacionalidade" required>
        <hr>

        <label for="estado">UF:</label>
        <input type="text" class="form-control" name="estado" required>
        <hr>

        <label for="cidade">Municipio:</label>
        <input type="text" class="form-control" name="cidade" required>
        <hr>

        <button type="submit" class="btn-enviar">Enviar</button>
    </form>


    </div>
  </main>

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

  <div id="mensagem" class="alert"></div>
</body>