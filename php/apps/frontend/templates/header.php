<header style="background-color:#4B0082; color:white; padding:20px 40px; display:flex; justify-content:space-between; align-items:center;">
  <div style="font-size:24px; font-weight:bold;">React & PHP - Parlavox</div>
  <nav>
    <a href="/" style="color:white; margin-left:20px; text-decoration:none;">Início</a>
    <a href="/dom" style="color:white; margin-left:20px; text-decoration:none;">DOM</a>
    <a href="/iframe" style="color:white; margin-left:20px; text-decoration:none;">Iframe</a>
    <a href="/sobre" style="color:white; margin-left:20px; text-decoration:none;">Rotas</a>
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
  /* Força todos os textos a usarem rem (opcional, mas ajuda) */
  body, p, a, h1, h2, h3, h4, h5, h6, span, div, button, input, label {
    font-size: 1rem !important;
  }

  html {
    font-size: 100%; /* 100% = 16px */
  }
</style>