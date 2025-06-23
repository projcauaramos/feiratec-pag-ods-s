<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ODS'S</title>
    <style>
      .menu-toggle {
        display: flex;
        flex-direction: column;
        width: 30px;
        padding: 10px;
        cursor: pointer;
        transition: transform 0.5s;
      }

      .bar {
        height: 3px;
        width: 100%;
        background-color: #000;
        margin: 4px 0;
        border-radius: 15px;
        transition: transform 0.5s, opacity 0.5s;
      }

      .menu-toggle.active .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
      }

      .menu-toggle.active .bar:nth-child(2) {
        opacity: 0;
      }

      .menu-toggle.active .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
      }

      .side-menu {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: width 0.5s;
        padding-top: 60px;
      }

      .side-menu a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: all 0.3s ease;
      }

      .side-menu a:hover {
        color: #f1f1f1;
        background-color: #444;
      }

      .side-menu .close-btn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
      }

      .side-menu .close-btn:hover {
        color: #818181;
        background-color: transparent;
      }

      /*aqui é o style provisorio para mostrar a base do css, n sera usado ele dessa forma tem que usar o arquivo principal style.css*/

      /*reset de css padrão*/
      * {
        padding: 0;
        margin: 0;
      }
      :root {
        --FONTTitulo: arial; /*mudar para a certa dps*/
        --FONTTituloSIZE: 20px; /*mudar para a certa dps*/
        --FONTBTNSMenu: arial; /*mudar para a certa dps*/
        --COLORBTNSMenu: black; /*mudar para a certa dps*/
        --BACKGROUNDCOLORBTNSMenu: rgba(255, 255, 255, 0.5); /*mudar para a certa dps*/
      }
      /*NÃO MEXER NEM EDITAR O CODIGO*/
      header {
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      #BTNMenu {
        display: none;
      }
      #Menu {
        border-radius: 4px;
        width: fit-content;
        border: 2px solid transparent;
        position: fixed;
        left: 10px;
      }
      input[type="checkbox"]#BTNMenu:checked ~ #Menu {
        box-shadow: 0 0 4px white, inset 0 0 4px white;
        background-color: rgba(255, 255, 255, 0.5);
        border: 2px solid white;
      }
      input[type="checkbox"]#BTNMenu:not(:checked) ~ div ul#MenuHolder {
        display: none;
      }
      ul#MenuHolder li.BTNSMenu a {
        appearance: auto;
        text-decoration: none;
        color: var(--COLORBTNSMenu);
        font-family: var(--FONTBTNSMenu);
        padding: 10px 20px;
        background-color: var(--BACKGROUNDCOLORBTNSMenu);
        box-shadow: inset 0 0 4px white;
      }
      ul#MenuHolder li.BTNSMenu {
        list-style: none;
      }
      ul#MenuHolder {
        display: flex;
        flex-direction: column;
        gap: 2px;
      }
      .logo-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px; /* Ajuste este valor conforme necessário para mover a logo para baixo */
      }
      .logo-container img {
        width: 150px; /* Ajuste o tamanho da logo conforme necessário */
        height: auto;
      }
      .ORGInfoHeader {
        display: flex;
        width: 50%;
        gap: 50%;
        justify-content: flex-end;
      }
      h1 {
        font-family: var(--FONTTitulo);
        font-size: var(--FONTTituloSIZE);
      }
      /*===================================================
        Responsividade via Media NÃO alterar
        os @media, alterar apenas o
        background-image para os respectivas telas
      ===================================================*/
      /*Estido de fundo que o body tera no Tablet*/
      @media (min-width: 768px) {
        body.telaTal {
          background-image: url(); /*aqui tem que substituir pelo caminho da foto para o fundo*/
          background-repeat: no-repeat;
          background-size: cover;
        }
      }
      /*Estido de fundo que o body tera no Tablet*/
      @media (min-width: 375px) and (max-width: 768px) {
        body.telaTal {
          background-image: url(); /*aqui tem que substituir pelo caminho da foto para o fundo*/
          background-repeat: no-repeat;
          background-size: cover;
        }
      }
      /*Estido de fundo que o body tera no Celular*/
      @media (max-width: 375px) {
        body.telaTal {
          background-image: url(); /*aqui tem que substituir pelo caminho da foto para o fundo*/
          background-repeat: no-repeat;
          background-size: cover;
        }
      }

      /* ===== ESTILOS PARA A PÁGINA ODS ===== */

      /* Container principal da página */
      .ods-main-container {
        padding: 20px;
        margin-top: 100px;
      }

      .ods-container {
        text-align:center;
        margin: 20px;
        cursor: pointer;
        transition: transform 0.2s;

      }

      .ods-container:hover {
        transform: scale(1.05);
      }
      
      /* Container das imagens ODS em grid */
      .ods-cards-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
        margin-bottom: 20px;
        max-width: 300px;
        margin-left: auto;
        margin-right: auto;
      }

      /* Item individual da imagem ODS */




      /* Imagens das ODS */
      .ods-image {
        width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        display: block;
      }

      .ods-description {
        margin-top: 19px;
        font-size: 16px;
        color: #333;
      }

      /* Botão Saiba Mais */
      .saiba-mais-btn {
        background-color: white;
        color: #4ecdc4;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: bold;
        cursor: pointer;
        margin: 20px auto;
        display: block;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        transition: transform 0.3s ease;
      }

      .saiba-mais-btn:hover {
        transform: translateY(-2px);
      }

      /* Caixas de texto informativo */
      .info-box {
        background-color: rgba(255,255,255,0.9);
        border-radius: 15px;
        padding: 15px;
        margin-bottom: 15px;
        text-align: justify;
        max-width: 300px;
        margin-left: auto;
        margin-right: auto;
      }

      .info-box p {
        color: #333;
        line-height: 1.4;
        font-size: 12px;
        margin: 0;
      }

      /* Área de texto */
      .text-area {
        background-color: rgba(255,255,255,0.7);
        border-radius: 10px;
        padding: 15px;
        min-height: 80px;
        border: 2px dashed #ccc;
        margin-bottom: 20px;
        max-width: 300px;
        margin-left: auto;
        margin-right: auto;
      }

      .text-area p {
        color: #666;
        font-size: 12px;
        margin: 0;
        line-height: 1.4;
      }

      /* Responsividade */
      @media (max-width: 375px) {
        .ods-cards-container {
          max-width: 280px;
          gap: 10px;
        }
        
        .ods-title-header {
          font-size: 28px;
          top: 50px;
          right: 15px;
        }

        .ods-main-container {
          padding: 15px;
          margin-top: 80px;
        }
      }



    </style>
  </head>
  <body class="telaTal">
    <header>
      <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <div class="ORGInfoHeader">
        <h1>ODS'S</h1>
      </div>
    </header>

    <main>
      <!-- Logo MCM -->
      <div class="logo-container">
        <img src="" alt="Logo MCM" />
      </div>

      <div class="ods-main-container">
        <!-- Imagens das ODS -->
        <div class="ods-cards-container">

          <!-- ODS 1 -->
          <div class="ods-container">
            <img src="img/ods1.jpg" alt="ODS 1 - Erradicar a Pobreza" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
          </div>

          <!-- ODS 2 -->
          <div class="ods-container"">
            <img src="img/ods2.png" alt="ODS 2 - Fome Zero e Agricultura Sustentável" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>

          <!-- ODS 3 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 3 - Saúde e Bem-Estar" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>

          <!-- ODS 4 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 4 - Educação de qualidade" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>

          <!-- ODS 5 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 5 - Igualdade de gênero" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>

          <!-- ODS 6 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 6 - Água potável e saneamento" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>

          <!-- ODS 7 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 7 - Energia limpa e acessível" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>

          <!-- ODS 8 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 8 - Trabalho decente e crescimento econômico" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>

          <!-- ODS 9 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 9 - Indústria, inovação e infraestrutura" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>

          <!-- ODS 10 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 10 - Redução das desigualdades" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>

          <!-- ODS 11 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 11 - Cidades e comunidades sustentáveis " class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>
          
          <!-- ODS 12 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 12 - Consumo e produção responsáveis" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>
          
          <!-- ODS 13 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 13 - Ação contra a mudança global do clima" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>

          <!-- ODS 14 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 14 - Vida na água " class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>

          <!-- ODS 15 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 15 - Vida terrestre" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>

          <!-- ODS 16 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 16 - Paz, justiça e instituições eficazes" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>

          <!-- ODS 17 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 17 - Parcerias e meios de implementação" class="ods-image" />
            <p class="ods-description">ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
            </div>
          </div>
        </div>

        <!-- Botão Saiba Mais -->
        <button class="saiba-mais-btn">Saiba Mais</button>

        <!-- Área de texto -->
        <div class="text-area">
          <p>ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global.</p>
        </div>
      </div>

    </main>

    <div id="mySideMenu" class="side-menu">
      <a href="javascript:void(0)" class="close-btn" onclick="closeMenu()">&times;</a>
      <a href="#">Mapa</a>
      <a href="#">Avaliação</a>
      <a href="#">Projetos</a>
      <a href="#">Ranking</a>
      <a href="#">Cursos</a>
      <a href="#">Sobre a Etec</a>
      <a href="#">Configurações</a>
    </div>

    <script>
      document.getElementById('mobile-menu').addEventListener('click', function() {
        this.classList.toggle('active');
        openMenu();
      });

      function openMenu() {
        document.getElementById('mySideMenu').style.width = '250px';
      }

      function closeMenu() {
        document.getElementById('mySideMenu').style.width = '0';
        document.getElementById('mobile-menu').classList.remove('active');
      }

      /* === JAVASCRIPT PARA FUNCIONALIDADES DA PÁGINA ODS === */
      
      // Funcionalidade do botão "Saiba Mais"
      document.querySelector('.saiba-mais-btn').addEventListener('click', function() {
        alert('Mais informações sobre os ODS serão exibidas aqui!');
      });

      // Funcionalidade para as imagens das ODS
      document.querySelectorAll('.ods-image-item').forEach(function(item, index) {
        item.addEventListener('click', function() {
          const odsNumber = index + 1;
          alert('Você clicou na ODS ' + odsNumber + '!');
        });
      });
    </script>
  </body>
</html>