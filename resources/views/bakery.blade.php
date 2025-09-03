<!DOCTYPE htmlP
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Padaria Romeu & Julieta</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #fff;
      color: #333;
    }

    /* ===== HEADER ===== */
    header {
      background: #b22222;
      padding: 8px 16px;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    /* Container da esquerda (logo + nome + navegação) */
    .header-left {
      display: flex;
      align-items: center;
      gap: 30px;
    }

    /* Logo */
    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
      width: 70px;
      height: auto;
    }

    /* Navegação */
    nav {
      display: flex;
      gap: 15px;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      font-size: 14px;
      padding: 4px 6px;
    }

    nav a:hover {
      text-decoration: underline;
    }

    /* Barra de pesquisa */
    .search-box {
      display: flex;
      align-items: center;
      background: white;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 5px 10px;
    }

    .search-box input {
      border: none;
      outline: none;
      padding: 5px;
      font-size: 14px;
    }

    .search-box i {
      color: #555;
      margin-right: 6px;
    }

    /* ===== BANNER ===== */
    .banner {
      display: flex;
      align-items: center;
      padding: 30px;
      background: #f9f9f9;
    }

    .banner img {
      width: 50%;
      border-radius: 8px;
    }

    .banner .info {
      padding: 20px;
    }

    .banner h1 {
      font-size: 2em;
      color: #b22222;
    }

    .banner p {
      margin: 15px 0;
      line-height: 1.5;
    }

    .btn {
      display: inline-block;
      background: #f7c948;
      color: #000;
      padding: 10px 18px;
      text-decoration: none;
      font-weight: bold;
      border-radius: 5px;
    }

    /* ===== PRODUTOS ===== */
    .produtos {
      padding: 30px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .produto {
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      text-align: center;
      background: white;
      box-shadow: 0 3px 6px rgba(0,0,0,0.1);
    }

    .produto img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }

    .produto h3 {
      margin: 10px 0 5px;
      color: #b22222;
    }

    .produto p {
      margin: 0 0 15px;
      font-weight: bold;
    }

    /* ===== FOOTER ===== */
    footer {
      background: #b22222;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <!-- ===== HEADER ===== -->
  <header>
    <div class="header-left">
      <div class="logo">
        <img src="img/logo.png" alt="Logo Padaria Romeu & Julieta">
        <strong>Padaria Romeu & Julieta</strong>
      </div>

      <nav>
        <a href="#paes">Pães</a>
        <a href="#queijos">Queijos</a>
        <a href="#doces">Doces</a>
        <a href="#contato">Contato</a>
      </nav>
    </div>

    <div class="search-box">
      <i>🔍</i>
      <input type="text" placeholder="Pesquisar produtos">
    </div>
  </header>

  <!-- ===== BANNER ===== -->
  <section class="banner">
    <img src="img/Romeu e Julieta.png" alt="Fachada da padaria Romeu & Julieta">
    <div class="info">
      <h1>Padaria Romeu & Julieta</h1>
      <p>
        A Padaria Romeu & Julieta é um estabelecimento tradicional que oferece pães, bolos, salgados e confeitaria,
        com destaque para a famosa combinação de queijo com goiabada.
      </p>
      <a href="#produtos" class="btn">Comprar agora</a>
    </div>
  </section>

  <!-- ===== PRODUTOS ===== -->
  <section id="produtos" class="produtos">
    <div class="produto">
      <img src="img/pão de sal.png" alt="Pão de sal">
      <h3>Pão de sal</h3>
      <p>10 por R$ 5,00</p>
    </div>

    <div class="produto">
      <img src="img/queijo.png" alt="Queijo Minas">
      <h3>Queijo Minas</h3>
      <p>R$ 24,99</p>
    </div>

    <div class="produto">
      <img src="img/manteiga.png" alt="Manteiga Qualy">
      <h3>Manteiga Qualy</h3>
      <p>R$ 7,99</p>
    </div>

    <div class="produto">
      <img src="img/goiabada.png" alt="Goiabada">
      <h3>Goiabada</h3>
      <p>R$ 14,50</p>
    </div>

    <div class="produto">
      <img src="img/leite.png" alt="Leite">
      <h3>Leite Serramar</h3>
      <p>R$ 7,69</p>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer>
    © 2025 Padaria Romeu & Julieta - Todos os direitos reservados
  </footer>
  <!-- Seção de Ofertas -->
  <section id="ofertas" style="background:#f4f4f4; padding:40px 20px; text-align:center;">
    <h2 style="color:#b22222; font-size:2em; margin-bottom:10px;">Ofertas!</h2>
    <p style="margin-bottom:30px; font-size:1.1em;">Produtos de alta qualidade e de sabor</p>

    <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:20px; max-width:1100px; margin:0 auto;">

      <!-- Bolo de Limão -->
      <div style="background:white; border-radius:10px; box-shadow:0 3px 6px rgba(0,0,0,0.1); padding:20px; position:relative;">
        <span style="position:absolute; top:10px; left:10px; background:#f7c948; color:#000; padding:6px 10px; border-radius:50%; font-size:0.8em; font-weight:bold;">
          PRODUTO NOVO
        </span>
        <img src="img/limão.png" alt="Bolo de limão" style="width:100%; border-radius:8px; margin-bottom:15px;">
        <h3 style="color:#b22222;">Bolo de limão</h3>
        <p>Massa leve e fofinha com toque cítrico irresistível, coberta com uma delicada calda de limão. Perfeito para acompanhar um café.</p>
        <a href="#" class="btn" style="background:#b22222; color:white; padding:10px 18px; border-radius:5px; display:inline-block; text-decoration:none; margin-top:10px;">Compre agora</a>
      </div>

      <!-- Mortadela -->
      <div style="background:white; border-radius:10px; box-shadow:0 3px 6px rgba(0,0,0,0.1); padding:20px;">
        <img src="img/mortadela.png" alt="Mortadela fatiada" style="width:100%; border-radius:8px; margin-bottom:15px;">
        <h3 style="color:#b22222;">Mortadela R$2,50 / 50g</h3>
        <p>Finas e saborosas fatias de mortadela, com aroma marcante e textura macia. Ideal para petiscos, tábuas frias ou sanduíches.</p>
        <a href="#" class="btn" style="background:#b22222; color:white; padding:10px 18px; border-radius:5px; display:inline-block; text-decoration:none; margin-top:10px;">Compre agora</a>
      </div>

      <!-- Coxinha -->
      <div style="background:white; border-radius:10px; box-shadow:0 3px 6px rgba(0,0,0,0.1); padding:20px; position:relative;">
        <span style="position:absolute; top:10px; left:10px; background:#f7c948; color:#000; padding:6px 10px; border-radius:50%; font-size:0.8em; font-weight:bold;">
          OFERTA DO DIA
        </span>
        <img src="img/coxinha.png" alt="Coxinha" style="width:100%; border-radius:8px; margin-bottom:15px;">
        <h3 style="color:#b22222;">Coxinha</h3>
        <p>Casquinha crocante por fora, recheio cremoso de frango bem temperado por dentro. Um clássico brasileiro que nunca sai de moda.</p>
        <a href="#" class="btn" style="background:#b22222; color:white; padding:10px 18px; border-radius:5px; display:inline-block; text-decoration:none; margin-top:10px;">Compre agora</a>
      </div>

    </div>
  </section>


</body>
</html>
