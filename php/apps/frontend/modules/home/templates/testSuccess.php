<?php
  $userName = isset($_GET['userName']) ? trim($_GET['userName']) : '';
  $props = [
    'userName' => $userName,
  ];
?>

<?php if (empty($userName)): ?>
  <div class="page-wrapper">
    <form method="GET" class="user-form">
      <div class="form-description">
        Digite seu nome abaixo. Ele será processado em PHP e enviado como
        propriedade para o componente React.
      </div>

      <label for="userName">Qual seu nome?</label>
      <input
        type="text"
        id="userName"
        name="userName"
        value=""
        placeholder="Digite seu nome"
      />
      <button type="submit">Salvar</button>
    </form>
  </div>
<?php else: ?>
  <main>
    <div
      id="react-my-component"
      data-props='<?= json_encode($props, JSON_HEX_APOS | JSON_HEX_QUOT) ?>'
    ></div>
  </main>
<?php endif; ?>


<style>
  body, html {
    margin: 0;
    padding: 0;
    height: 50%;
    font-family: sans-serif;
  }

  .page-wrapper {
    height: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .user-form {
    padding: 24px 32px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 12px;
    max-width: 400px;
    width: 90%;
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  .user-form label {
    font-weight: bold;
    font-size: 16px;
    color: #333;
  }

  .user-form input {
    padding: 10px 14px;
    font-size: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    outline: none;
  }

  .user-form input:focus {
    border-color: #4B0082;
  }

  .user-form button {
    padding: 12px;
    background-color: #4B0082;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
    font-size: 15px;
    width: 100%;
    transition: background-color 0.2s ease;
  }

  .user-form button:hover {
    background-color: #360064;
  }

  .form-description {
    font-size: 14px;
    color: #666;
    margin-bottom: 4px;
  }

  main {
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 20px;
  }
</style>
