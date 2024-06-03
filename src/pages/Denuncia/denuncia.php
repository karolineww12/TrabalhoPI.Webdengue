<?php

include_once("../conexao.php");


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Denuncia</title>
  <link rel="stylesheet" href="/public/css/community.css">
  <link rel="stylesheet" href="/src/pages/Denuncia/denuncia.css">
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

  <div class="container">
    <h1>Faça sua Denúncia</h1>
    <p>Os campos sinalizados com asterisco * são de preenchimento obrigatório</p>
    <form action="denuncia_script.php" method="POST">
        <label for="destinatario"><p class="formulario">Destinatário</p></label>
        <hr>
        <select id="destinatario" name="destinatario">
            <option value="">Selecione o órgão</option>
            <option value="1">Ministério da Justiça</option>
            <option value="2">Polícia Federal</option>
            <option value="3">Receita Federal</option>
        </select>

        <label for="descricao"><p class="formulario">Descrição</p></label>
        <hr>
        <p><b>Fale aqui*</b></p>
        <p>Descreva abaixo o conteúdo de sua manifestação. Seja claro e objetivo.
        Informações pessoais, inclusive identificação, não precisam ser inseridas a não ser que sejam essenciais para a caracterização
        da manifestação</p>
        <textarea name="descricao" class="form-control" rows="5"></textarea>

        <label for="localDoFato"><p class="formulario">Local do Fato</p></label>
        <hr>

        <label for="uf">UF</label>
        <select name="uf">
            <option value="">Selecione o estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="SP">São Paulo</option>
            <option value="RJ">Rio de Janeiro</optio>
            <option value="ES">Espirito Santo</option>
            <option value="MG">Minas Gerais</option>
            <option value="MT">Mato Grosso</optio>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="GO">Goiás</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="PI">Piauí</option>
            <option value="PE">Pernambuco</option>
            <option value="BA">Bahia</option>
            
        </select>

        <label for="municipio">Município</label>
        <select name="municipio">
            <option value="">Selecione o município</option>
            <option value="1">São Paulo</option>
            <option value="2">Rio de Janeiro</option>
            <option value="3">Belo Horizonte</option>
            <option value="4">Recife</option>
            <option value="5">Salvador</option>
            <option value="6">Teresina</option>
            <option value="7">Porto Alegre</option>
            <option value="8">Cuiabá</option>
            <option value="9">Campo Grande</option>
            <option value="10">Macapá</option>
            <option value="11">Natal</option>
            <option value="12">Rio Branco</option>
            <option value="13">Manaus</option>
            <option value="14">Boa Vista</optio>
            <option value="15">Belém do Pará</option>
        </select>
        

        <label for="local">Local</label>
        <input type="text" class="form-control" name="localidade">

        <label for="descricao"><p class="formulario">Quais são os envolvidos nos fatos</p></label>
        <hr>

        <label for="nomeEnvolvido">Nome do Envolvido:</label>
        <input type="text" class="form-control" name="envolvido" required>

        <label for="cpfEnvolvido">CPF do Envolvido:</label>
        <input type="text" class="form-control" name="cpf" required>

        <label for="orgaoEmpresa">Órgão/Empresa:</label>
        <input type="text" class="form-control" name="organizacao" required>

        <label for="funcaoEnvolvido">Função do Envolvido:</label>
        <input type="text" class="form-control" name="funcao" required>

        <button type="submit" class="btn-enviar">Enviar</button>
    </form>
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