<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Formulário de Contato - Empresas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #fff5f5;
      margin: 0;
      padding: 0;
    }
    header {
      background: #b71c1c;
      color: white;
      text-align: center;
      padding: 25px 15px;
    }
    header h1 {
      margin: 0;
      font-size: 28px;
    }
    header p {
      margin: 5px 0 0;
      font-size: 16px;
    }
    main {
      max-width: 700px;
      margin: 30px auto;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h2 {
      color: #b71c1c;
      margin-bottom: 20px;
    }
    label {
      font-weight: bold;
      color: #333;
    }
    input, textarea, select {
      width: 100%;
      padding: 12px;
      margin-top: 6px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      box-sizing: border-box;
    }
    textarea {
      resize: vertical;
    }
    button {
      background: #b71c1c;
      color: white;
      border: none;
      padding: 14px 22px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      background: #e53935;
    }
    footer {
      text-align: center;
      padding: 20px;
      color: #666;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <header>
    <h1>Contato Comercial</h1>
    <p>Entre em contato para parcerias e serviços</p>
  </header>

  <main>
    <h2>Formulário de Contato</h2>
    <form method="POST">
        @csrf
      <label for="empresa">Empresa *</label>
      <input type="text" id="empresa" name="empresa" required>

      <label for="responsavel">Responsável *</label>
      <input type="text" id="responsavel" name="responsavel" required>

      <label for="email">E-mail *</label>
      <input type="email" id="email" name="email" required>

      <label for="telefone">Telefone</label>
      <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000">

      <label for="assunto">Assunto *</label>
      <input type="text" id="assunto" name="assunto" required>

      <label for="servico">Serviço de interesse</label>
      <select id="servico" name="servico">
        <option value="">Selecione...</option>
        <option value="fornecimento">Fornecimento</option>
        <option value="evento">Eventos</option>
        <option value="parceria">Parceria</option>
        <option value="outros">Outros</option>
      </select>

      <label for="mensagem">Mensagem *</label>
      <textarea id="mensagem" name="mensagem" rows="6" required></textarea>

      <button type="submit">Enviar</button>
    </form>
  </main>

  <footer>
    © 2025 — Sua Empresa
  </footer>

</body>
</html>
