<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Model Card</title>
  <link rel="stylesheet" href="styleCSS/style.css" />
  <style>
    /* Estilo mínimo para funcionamento */
    .card-container {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      padding: 2rem;
    }

    .wrapper {
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 1rem;
      width: 300px;
      background: #f9f9f9;
    }

    .card img {
      width: 100%;
      border-radius: 8px;
    }

    .card__desc, .card__details {
      margin-top: 1rem;
    }

    .card__details {
      display: none;
    }

    .card__details.open {
      display: block;
    }

    .det__btn, .buy__btn {
      margin-top: 1rem;
      padding: 10px;
      width: 100%;
      background-color: #97519c;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .det__btn:hover, .buy__btn:hover {
      background-color: #7d3d84;
    }
  </style>
</head>

<body>

  <div class="card-container">
    <div class="wrapper">
      <figure class="card">
        <img src="./img/house.jpg" alt="card image" />
        <figcaption class="card__cap">
          <h2>Casa de praia</h2>
          <div class="card__desc">
            <p>5 quartos</p>
            <p>3 suítes</p>
            <p>1 piscina</p>
          </div>
        </figcaption>
        <button class="det__btn">Detalhes</button>
      </figure>

      <div class="card__details">
        <p class="card__type">Básico</p>
        <h6 class="card__price"><sup>Mzn</sup>599 <sub>/dia</sub></h6>
        <div class="card__feactures">
          <div class="feacture">Sala de jogos</div>
          <div class="feacture">Suítes com hidromassagem</div>
          <div class="feacture">Wi-Fi 24h</div>
          <div class="feacture">Câmeras de segurança</div>
        </div>
        <button class="buy__btn">Fechar</button>
      </div>
    </div>

    <!-- Outro card -->
    <div class="wrapper">
      <figure class="card">
        <img src="./img/house.jpg" alt="card image" />
        <figcaption class="card__cap">
          <h2>Casa de campo</h2>
          <div class="card__desc">
            <p>4 quartos</p>
            <p>2 suítes</p>
            <p>Churrasqueira</p>
          </div>
        </figcaption>
        <button class="det__btn">Detalhes</button>
      </figure>

      <div class="card__details">
        <p class="card__type">Luxo</p>
        <h6 class="card__price"><sup>Mzn</sup>899 <sub>/dia</sub></h6>
        <div class="card__feactures">
          <div class="feacture">Churrasqueira gourmet</div>
          <div class="feacture">Cascata</div>
          <div class="feacture">Internet Fibra</div>
          <div class="feacture">Área kids</div>
        </div>
        <button class="buy__btn">Fechar</button>
      </div>
    </div>
  </div>
  <div class="card-container">
  <!-- ---------- CARD 1 ---------- -->
  <div class="wrapper">
    <figure class="card">
      <img src="./img/house.jpg" alt="Casa de praia" />
      <figcaption class="card__cap">
        <h2>Casa de praia</h2>
        <div class="card__desc">
          <p>5 quartos</p><p>3 suítes</p><p>1 piscina</p>
        </div>
      </figcaption>
      <button class="det__btn">Detalhes</button>
    </figure>

    <div class="card__details">
      <p class="card__type">Básico</p>
      <h6 class="card__price"><sup>Mzn</sup>599 <sub>/dia</sub></h6>
      <div class="card__feactures">
        <div class="feacture">Sala de jogos</div>
        <div class="feacture">Hidromassagem</div>
        <div class="feacture">Wi-Fi 24 h</div>
        <div class="feacture">Câmeras de segurança</div>
      </div>
      <button class="buy__btn">Fechar</button>
    </div>
  </div>

  <!-- ---------- CARD 2 ---------- -->
  <div class="wrapper">
    <figure class="card">
      <img src="./img/house2.jpg" alt="Casa de campo" />
      <figcaption class="card__cap">
        <h2>Casa de campo</h2>
        <div class="card__desc">
          <p>4 quartos</p><p>2 suítes</p><p>Churrasqueira</p>
        </div>
      </figcaption>
      <button class="det__btn">Detalhes</button>
    </figure>

    <div class="card__details">
      <p class="card__type">Luxo</p>
      <h6 class="card__price"><sup>Mzn</sup>899 <sub>/dia</sub></h6>
      <div class="card__feactures">
        <div class="feacture">Churrasqueira gourmet</div>
        <div class="feacture">Cascata</div>
        <div class="feacture">Fibra óptica</div>
        <div class="feacture">Área kids</div>
      </div>
      <button class="buy__btn">Fechar</button>
    </div>
  </div>

  <!-- ---------- CARD 3 ---------- -->
  <div class="wrapper">
    <figure class="card">
      <img src="./img/house3.jpg" alt="Apartamento urbano" />
      <figcaption class="card__cap">
        <h2>Apartamento urbano</h2>
        <div class="card__desc">
          <p>3 quartos</p><p>1 suíte</p><p>Vista panorâmica</p>
        </div>
      </figcaption>
      <button class="det__btn">Detalhes</button>
    </figure>

    <div class="card__details">
      <p class="card__type">Executivo</p>
      <h6 class="card__price"><sup>Mzn</sup>499 <sub>/dia</sub></h6>
      <div class="card__feactures">
        <div class="feacture">Academia</div>
        <div class="feacture">Coworking</div>
        <div class="feacture">Portaria 24 h</div>
        <div class="feacture">Pet-friendly</div>
      </div>
      <button class="buy__btn">Fechar</button>
    </div>
  </div>

  <!-- ---------- CARD 4 ---------- -->
  <div class="wrapper">
    <figure class="card">
      <img src="./img/house4.jpg" alt="Chalé na montanha" />
      <figcaption class="card__cap">
        <h2>Chalé na montanha</h2>
        <div class="card__desc">
          <p>2 quartos</p><p>Lareira</p><p>Banheira externa</p>
        </div>
      </figcaption>
      <button class="det__btn">Detalhes</button>
    </figure>

    <div class="card__details">
      <p class="card__type">Rústico</p>
      <h6 class="card__price"><sup>Mzn</sup>549 <sub>/dia</sub></h6>
      <div class="card__feactures">
        <div class="feacture">Sauna seca</div>
        <div class="feacture">Trilhas próximas</div>
        <div class="feacture">Lareira interna</div>
        <div class="feacture">Cozinha equipada</div>
      </div>
      <button class="buy__btn">Fechar</button>
    </div>
  </div>

  <script>
  document.querySelectorAll('.wrapper').forEach((wrapper) => {
    const detBtn = wrapper.querySelector('.det__btn');
    const buyBtn = wrapper.querySelector('.buy__btn');
    const details = wrapper.querySelector('.card__details');

    detBtn.addEventListener('click', () => {
      details.classList.add('open');
    });

    buyBtn.addEventListener('click', () => {
      details.classList.remove('open');
    });
  });
</script>


</body>
</html>