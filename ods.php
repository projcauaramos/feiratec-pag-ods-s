<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Base</title>
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

      /* ===== ADICIONADO: ESTILOS PARA AS ODS ===== */
      
      /* ADICIONADO: Adicionando box-sizing para melhor controle */
      * {
        box-sizing: border-box;
      }

      /* ADICIONADO: Container principal das ODS */
      .ods-main-container {
        padding: 20px;
        margin-top: 30px;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
      }

      /* ADICIONADO: Grid responsivo para as ODS */
      .ods-cards-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
        width: 100%;
      }

      /* ADICIONADO: Container individual de cada ODS com brilho fixo */
      .ods-container {
        text-align: center;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        padding: 15px;
        /* ADICIONADO: Brilho fixo - múltiplas camadas de box-shadow */
        box-shadow: 
          0 0 10px rgba(78, 205, 196, 0.4),
          0 0 20px rgba(78, 205, 196, 0.3),
          0 0 30px rgba(78, 205, 196, 0.2),
          0 4px 8px rgba(0,0,0,0.1);
        border: 1px solid rgba(78, 205, 196, 0.3);
      }

      /* ADICIONADO: Efeito hover nas ODS - intensifica o brilho */
      .ods-container:hover {
        transform: scale(1.05);
        box-shadow: 
          0 0 15px rgba(78, 205, 196, 0.6),
          0 0 30px rgba(78, 205, 196, 0.4),
          0 0 45px rgba(78, 205, 196, 0.3),
          0 6px 15px rgba(0,0,0,0.2);
        border: 1px solid rgba(78, 205, 196, 0.5);
      }

      /* ADICIONADO: Estilo das imagens das ODS */
      .ods-image {
        width: 100%;
        max-width: 200px;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        display: block;
        margin: 0 auto 15px auto;
      }

      /* ADICIONADO: Descrição das ODS */
      .ods-description {
        font-size: 14px;
        color: #333;
        line-height: 1.4;
        text-align: justify;
      }

      /* ADICIONADO: Botão Saiba Mais com brilho */
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
        box-shadow: 
          0 0 8px rgba(78, 205, 196, 0.3),
          0 4px 8px rgba(0,0,0,0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      /* ADICIONADO: Efeito hover do botão - intensifica o brilho */
      .saiba-mais-btn:hover {
        transform: translateY(-2px);
        box-shadow: 
          0 0 12px rgba(78, 205, 196, 0.5),
          0 6px 12px rgba(0,0,0,0.3);
      }

      /* ADICIONADO: Área de texto informativo com brilho sutil */
      .text-area {
        background-color: rgba(255,255,255,0.9);
        border-radius: 15px;
        padding: 20px;
        min-height: 80px;
        border: 2px dashed #ccc;
        margin-bottom: 20px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 
          0 0 5px rgba(78, 205, 196, 0.2),
          0 2px 8px rgba(0,0,0,0.1);
      }

      /* ADICIONADO: Texto da área informativa */
      .text-area p {
        color: #333;
        font-size: 14px;
        margin: 0;
        line-height: 1.6;
        text-align: center;
      }

      /* ===== ADICIONADO: RESPONSIVIDADE PARA AS ODS ===== */
      
      /* ADICIONADO: Desktop - 4 colunas */
      @media (min-width: 1024px) {
        .ods-cards-container {
          grid-template-columns: repeat(4, 1fr);
          gap: 25px;
        }
      }

      /* ADICIONADO: Tablet - 3 colunas */
      @media (min-width: 768px) and (max-width: 1023px) {
        .ods-cards-container {
          grid-template-columns: repeat(3, 1fr);
          gap: 20px;
        }
      }

      /* ADICIONADO: Mobile grande - 2 colunas */
      @media (min-width: 480px) and (max-width: 767px) {
        .ods-cards-container {
          grid-template-columns: repeat(2, 1fr);
          gap: 15px;
        }
        
        .ods-main-container {
          padding: 15px;
          margin-top: 20px;
        }
        
        /* ADICIONADO: Reduzir brilho em telas menores para melhor performance */
        .ods-container {
          box-shadow: 
            0 0 8px rgba(78, 205, 196, 0.3),
            0 0 15px rgba(78, 205, 196, 0.2),
            0 4px 8px rgba(0,0,0,0.1);
        }
      }

      /* ADICIONADO: Mobile pequeno - 1 coluna */
      @media (max-width: 479px) {
        .ods-cards-container {
          grid-template-columns: 1fr;
          gap: 15px;
        }
        
        .ods-main-container {
          padding: 10px;
          margin-top: 15px;
        }
        
        .ods-container {
          padding: 10px;
          /* ADICIONADO: Brilho reduzido para mobile pequeno */
          box-shadow: 
            0 0 6px rgba(78, 205, 196, 0.3),
            0 0 12px rgba(78, 205, 196, 0.2),
            0 2px 6px rgba(0,0,0,0.1);
        }
        
        .ods-description {
          font-size: 12px;
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
        <h1>ODS'S</h1><!--ADICIONADO: Nome da tela alterado para ODS'S-->
      </div>
    </header>
    <main>
      <div class="logo-container">
        <img src="" alt="Logo MCM" /><!--Foto do MCM que esta no figma-->
      </div>

      <!-- ADICIONADO: INÍCIO DO CONTEÚDO DAS ODS -->
      <div class="ods-main-container">
        <!-- ADICIONADO: Container das imagens das ODS -->
        <div class="ods-cards-container">

          <!-- ADICIONADO: ODS 1 -->
          <div class="ods-container">
            <img src="img/ods1.jpg" alt="ODS 1 - Erradicar a Pobreza" class="ods-image" />
            <p class="ods-description">Erradicar a pobreza em todas as suas formas e em todos os lugares do mundo.</p>
          </div>

          <!-- ADICIONADO: ODS 2 -->
          <div class="ods-container">
            <img src="img/ods2.png" alt="ODS 2 - Fome Zero e Agricultura Sustentável" class="ods-image" />
            <p class="ods-description">Acabar com a fome, alcançar a segurança alimentar e melhoria da nutrição e promover a agricultura sustentável.</p>
          </div>

          <!-- ADICIONADO: ODS 3 -->
          <div class="ods-container">
            <img src="img/ods3.png" alt="ODS 3 - Saúde e Bem-Estar" class="ods-image" />
            <p class="ods-description">Assegurar uma vida saudável e promover o bem-estar para todos, em todas as idades.</p>
          </div>

          <!-- ADICIONADO: ODS 4 -->
          <div class="ods-container">
            <img src="img/ods4.png" alt="ODS 4 - Educação de qualidade" class="ods-image" />
            <p class="ods-description">Assegurar a educação inclusiva e equitativa de qualidade, e promover oportunidades de aprendizagem ao longo da vida para todos.</p>
          </div>

          <!-- ADICIONADO: ODS 5 -->
          <div class="ods-container">
            <img src="img/ods5.png" alt="ODS 5 - Igualdade de gênero" class="ods-image" />
            <p class="ods-description">Alcançar a igualdade de gênero e empoderar todas as mulheres e meninas.</p>
          </div>

          <!-- ADICIONADO: ODS 6 -->
          <div class="ods-container">
            <img src="img/ods6.png" alt="ODS 6 - Água potável e saneamento" class="ods-image" />
            <p class="ods-description">Assegurar a disponibilidade e gestão sustentável da água e saneamento para todos.</p>
          </div>

          <!-- ADICIONADO: ODS 7 -->
          <div class="ods-container">
            <img src="img/ods7.png" alt="ODS 7 - Energia limpa e acessível" class="ods-image" />
            <p class="ods-description">Assegurar o acesso confiável, sustentável, moderno e a preço acessível à energia para todos.</p>
          </div>

          <!-- ADICIONADO: ODS 8 -->
          <div class="ods-container">
            <img src="img/ods8.png" alt="ODS 8 - Trabalho decente e crescimento econômico" class="ods-image" />
            <p class="ods-description">Promover o crescimento econômico sustentado, inclusivo e sustentável, emprego pleno e produtivo e trabalho decente para todos.</p>
          </div>

          <!-- ADICIONADO: ODS 9 -->
          <div class="ods-container">
            <img src="img/ods9.png" alt="ODS 9 - Indústria, inovação e infraestrutura" class="ods-image" />
            <p class="ods-description">Construir infraestruturas resilientes, promover a industrialização inclusiva e sustentável e fomentar a inovação.</p>
          </div>

          <!-- ADICIONADO: ODS 10 -->
          <div class="ods-container">
            <img src="img/ods10.jpg" alt="ODS 10 - Redução das desigualdades" class="ods-image" />
            <p class="ods-description">Reduzir a desigualdade dentro dos países e entre eles.</p>
          </div>

          <!-- ADICIONADO: ODS 11 -->
          <div class="ods-container">
            <img src="img/ods11.png" alt="ODS 11 - Cidades e comunidades sustentáveis" class="ods-image" />
            <p class="ods-description">Tornar as cidades e os assentamentos humanos inclusivos, seguros, resilientes e sustentáveis.</p>
          </div>
          
          <!-- ADICIONADO: ODS 12 -->
          <div class="ods-container">
            <img src="img/ods12.png" alt="ODS 12 - Consumo e produção responsáveis" class="ods-image" />
            <p class="ods-description">Assegurar padrões de produção e de consumo sustentáveis.</p>
          </div>
          
          <!-- ADICIONADO: ODS 13 -->
          <div class="ods-container">
            <img src="img/ods13.png" alt="ODS 13 - Ação contra a mudança global do clima" class="ods-image" />
            <p class="ods-description">Tomar medidas urgentes para combater a mudança climática e seus impactos.</p>
          </div>

          <!-- ADICIONADO: ODS 14 -->
          <div class="ods-container">
            <img src="img/ods14.png" alt="ODS 14 - Vida na água" class="ods-image" />
            <p class="ods-description">Conservação e uso sustentável dos oceanos, dos mares e dos recursos marinhos para o desenvolvimento sustentável.</p>
          </div>

          <!-- ADICIONADO: ODS 15 -->
          <div class="ods-container">
            <img src="img/ods15.png" alt="ODS 15 - Vida terrestre" class="ods-image" />
            <p class="ods-description">Proteger, recuperar e promover o uso sustentável dos ecossistemas terrestres.</p>
          </div>

          <!-- ADICIONADO: ODS 16 -->
          <div class="ods-container">
            <img src="img/ods16.png" alt="ODS 16 - Paz, justiça e instituições eficazes" class="ods-image" />
            <p class="ods-description">Promover sociedades pacíficas e inclusivas para o desenvolvimento sustentável.</p>
          </div>

          <!-- ADICIONADO: ODS 17 -->
          <div class="ods-container">
            <img src="img/ods17.png" alt="ODS 17 - Parcerias e meios de implementação" class="ods-image" />
            <p class="ods-description">Fortalecer os meios de implementação e revitalizar a parceria global para o desenvolvimento sustentável.</p>
          </div>
        </div>

        <!-- ADICIONADO: Botão Saiba Mais -->
        <button class="saiba-mais-btn">Saiba Mais</button>

        <!-- ADICIONADO: Área de texto informativo -->
        <div class="text-area">
          <p>ODS é a sigla para os Objetivos de Desenvolvimento Sustentável que fazem parte da chamada "Agenda 2030". Trata-se de um pacto global assinado durante a Cúpula das Nações Unidas em 2015 pelos 193 países membros.</p>
        </div>
      </div>
      <!-- ADICIONADO: FIM DO CONTEÚDO DAS ODS -->

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

      /* ===== ADICIONADO: JAVASCRIPT PARA AS ODS ===== */
      
      // ADICIONADO: Funcionalidade do botão "Saiba Mais"
      document.querySelector('.saiba-mais-btn').addEventListener('click', function() {
        alert('Mais informações sobre os ODS serão exibidas aqui!');
      });

      // ADICIONADO: Funcionalidade para clique nas ODS
      document.querySelectorAll('.ods-container').forEach(function(item, index) {
        item.addEventListener('click', function() {
          const odsNumber = index + 1;
          alert('Você clicou na ODS ' + odsNumber + '!');
        });
      });
    </script>
  </body>
</html>