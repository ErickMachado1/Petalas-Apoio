<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Inicio - Pétalas de Apoio</title>
  <link rel="stylesheet" href="style.css" />
  <script src="script.js"></script>
  <link rel="icon" href="/Pagina/Img/favicon.ico" type="image/x-icon">
</head>

<body>
  <div id="menu" onclick="fecharmenu()">
    <ul>
      <h2> Menu - Pétalas de Apoio</h2>
      <a href="Pagina/Submission/Frontend/index.html" id="Envie">Envie uma mensagem!</a>
      <br />
      <br />
      <a href="Pagina/About/Frontend/index.html" id="Sobre">Sobre</a>
      <h5 id="copyright">© 2024 Erick M. Behling, All Rights Reserved</h5>
    </ul>
  </div>
  <span id="areamenu" onclick="abrirmenu()"></span>
  <header>
    <h1 id="titulo">Pétalas de Apoio</h1>
    <h3 id="sub-titulo">
      Clique na lateral esquerda para abrir o menu! <br>
      Selecione a emoção que está sentindo agora.
    </h3>
  </header>
  <div class="flor-container">
    <div id="folha-1">
      <a href="./Pagina/Home/Backend/puxardados.php?emotion=medo">Medo</a>
    </div>
    <div id="folha-2">
      <a href="./Pagina/Home/Backend/puxardados.php?emotion=solidao">Solidão</a>
    </div>
    <div id="folha-3">
      <a href="./Pagina/Home/Backend/puxardados.php?emotion=tristeza">Tristeza</a>
    </div>
    <div id="folha-4">
      <a href="./Pagina/Home/Backend/puxardados.php?emotion=indiferenca">Indiferença</a>
    </div>
    <div id="folha-5">
      <a href="./Pagina/Home/Backend/puxardados.php?emotion=desesperanca">Desesperança</a>
    </div>
    <div id="folha-6">
      <a href="./Pagina/Home/Backend/puxardados.php?emotion=incertezas">Incertezas</a>
    </div>
    <div id="folha-7">
      <a href="./Pagina/Home/Backend/puxardados.php?emotion=estresse">Estresse</a>
    </div>
    <div id="folha-8">
      <a href="./Pagina/Home/Backend/puxardados.php?emotion=cansaco">Cansaço</a>
    </div>
    <div id="flor-centro"></div>
  </div>
  <footer>

  </footer>
</body>

</html>