<header style="background-color:#4B0082; color:white; padding:20px 40px; display:flex; justify-content:space-between; align-items:center;">
<div style="font-size:24px; font-weight:bold; display: flex; align-items: center;">
  <img style="height:70px; width: 70px; margin-right: 10px;" src="/assets/logo.png" alt="Logo" srcset="">
  <h2>React & Symfony</h2>
</div>

<nav>
    <a href="/">Início</a>
    <a href="/dom">DOM</a>
    <a href="/iframe">Iframe</a>
    <a href="/sobre">Rotas</a>
    <a href="/vereador">Form</a>
  </nav>
  <div style="display: flex; align-items: center; gap: 10px; margin-left: 30px;">
    <button onclick="adjustFontSize(1)" style="padding: 8px 12px; font-size: 16px;">+A</button>
    <button onclick="adjustFontSize(-1)" style="padding: 8px 12px; font-size: 16px;">-A</button>
    <button onclick="toggleHighContrast()" style="padding: 8px 16px; background: black; color: yellow; border: none; border-radius: 4px; cursor: pointer;">
      Alto Contraste
    </button>
  </div>
</header>

<style>
  body.high-contrast {
    background-color: #000 !important;
    color: #FFD700 !important;
  }

  body.high-contrast a {
    color: #00FFFF !important;
    text-decoration: underline;
  }

  body.high-contrast header {
    background-color: #000 !important;
    color: #FFD700 !important;
  }

  body.high-contrast main,
  body.high-contrast div,
  body.high-contrast section,
  body.high-contrast footer {
    background-color: #111 !important;
    color: #FFD700 !important;
  }

  body.high-contrast button {
    background-color: #FFD700 !important;
    color: #000 !important;
  }

  body.high-contrast input,
  body.high-contrast textarea,
  body.high-contrast select {
    background-color: #222 !important;
    color: #FFF !important;
    border: 1px solid #FFD700 !important;
  }
</style>

<script>
  let baseFontSize = 100;

  function adjustFontSize(delta) {
    baseFontSize = Math.max(75, baseFontSize + delta * 10);
    document.documentElement.style.fontSize = baseFontSize + '%';
  }

  function toggleHighContrast() {
    document.body.classList.toggle("high-contrast");
  }
</script>

<style>
    nav {
      display: flex;
      gap: 20px
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.2s;
    }

    nav a:hover {
      font-weight: 600;
    }
  </style>

<script>
  // Função para obter o valor do parâmetro userName da URL
  function getUserNameFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('userName');
  }

  // Função para atualizar links com o parâmetro userName
  function updateLinks() {
    const userName = getUserNameFromUrl();
    if (userName) {
      // Seleciona todos os links dentro do seu header
      const links = document.querySelectorAll('header nav a');
      links.forEach(link => {
        const url = new URL(link.href);
        // Adiciona ou atualiza o parâmetro userName na URL
        url.searchParams.set('userName', userName);
        link.href = url.toString();
      });
    }
  }

  // Chama a função para atualizar os links quando a página for carregada
  window.addEventListener('load', updateLinks);
</script>

<style>

  html {
    font-size: 100%; /* 100% = 16px */
  }
</style>