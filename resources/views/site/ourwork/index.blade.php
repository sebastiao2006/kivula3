@extends('layouts.app')
@section('title', 'Kivula')
@section('content')

<main>


{{-- <section class="social-section">
  <div class="text-area">
    <div class="barra"></div>
    <h4> Design de ponta</h4>
    <h1>Design para <strong>Social Media</strong></h1>
    <p>
      Designs impactantes são essenciais para atrair a atenção do seu público em qualquer plataforma.
      Oferecemos soluções personalizadas e inovadoras, desde peças estáticas até animações e vídeos,
      em todos os formatos e dimensões que você precisa. Seja no Instagram, TikTok ou outras redes,
      de postagens a stories, nossos designs ajudam sua marca a se destacar e a elevar sua produção de conteúdo para outro nível.
    </p>
    <button>Quero começar agora</button>
  </div>

  <div class="carousel-wrapper">
    <div class="slider">
      <button class="arrow left">&#10094;</button>

      <div class="carousel" id="carousel">
        <div class="slide" style="background-color: #7CFF61;">
          <img src="{{ asset('assets/img/capa15.jpg') }}" alt="Design 1" />
        </div>
        <div class="slide" style="background-color: #F3D6C8;">
          <img src="{{ asset('assets/img/capa15.jpg') }}" alt="Design 2" />
        </div>
        <div class="slide" style="background-color: #162639;">
          <img src="{{ asset('assets/img/capa15.jpg') }}" alt="Design 3" />
        </div>
      </div>

      <button class="arrow right">&#10095;</button>
    </div>
  </div>
</section> --}}


<style>
    .social-section {
    display: flex;
    flex-direction: column;
    gap: 40px;
    background: #0262d1;
    padding: 60px 190px;
    color: #fff;
    overflow: hidden;
    }

    .text-area {
    margin-left: 80px;
    max-width: 600px;
    }

    .text-area h4 {
    color: white;
    }

    .barra {
    width: 8px;
    height: 100%;
    background: #ffffff;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    }

    .text-area h1 {
    color: white;
    margin-left: 80px;
    font-size: 32px;
    font-weight: 700;
    margin: 10px 0 20px;
    }

    .text-area p {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 20px;
    }

    .text-area button {
    padding: 12px 24px;
    background: #ffffff;
    color: #0262d1;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    }

    .slider {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    }

    .carousel-wrapper {
    margin-left: 60px;
    margin-right: 40px;
    overflow: hidden;
    }

    .carousel {
    display: flex;
    gap: 30px;
    transition: transform 0.5s ease-in-out;
    }

    .slide {
    flex: 0 0 300px;
    padding: 20px;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .slide img {
    width: 160px;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: #0262d1;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    font-size: 22px;
    cursor: pointer;
    z-index: 1;
    }

    .arrow.left {
    left: 0;
    }

    .arrow.right {
    right: 0;
    }

    @media (max-width: 768px) {
    .carousel {
        gap: 15px;
    }

    .slide {
        flex: 0 0 240px;
    }
    }

</style>


<script>
  const carousel = document.getElementById("carousel");
  let slides = document.querySelectorAll(".slide");
  const slideWidth = slides[0].offsetWidth + 30;

  let index = 0;
  let position = 0;

  // Clona os slides e adiciona ao final
  slides.forEach((slide) => {
    const clone = slide.cloneNode(true);
    carousel.appendChild(clone);
  });

  slides = document.querySelectorAll(".slide"); // atualizar após clonar

  function moveNext() {
    position += slideWidth;
    carousel.style.transition = "transform 0.5s ease-in-out";
    carousel.style.transform = `translateX(-${position}px)`;

    // Se chegou no final, reseta
    if (position >= slideWidth * (slides.length / 2)) {
      setTimeout(() => {
        carousel.style.transition = "none";
        position = 0;
        carousel.style.transform = `translateX(0px)`;
      }, 500);
    }
  }

  function movePrev() {
    if (position <= 0) {
      position = slideWidth * (slides.length / 2);
      carousel.style.transition = "none";
      carousel.style.transform = `translateX(-${position}px)`;
    }

    setTimeout(() => {
      position -= slideWidth;
      carousel.style.transition = "transform 0.5s ease-in-out";
      carousel.style.transform = `translateX(-${position}px)`;
    }, 20);
  }

  document.querySelector(".arrow.right").addEventListener("click", moveNext);
  document.querySelector(".arrow.left").addEventListener("click", movePrev);

  // autoplay
  setInterval(moveNext, 5000);
</script>

          <!-- quinta Section -->

<section class="recent-work">
  <h2>Trabalhos recentes</h2>
  <p>Confira nossos últimos projetos</p>

  <div class="filters">
    <button class="filter-btn active" data-filter="all">Todos</button>
    <button class="filter-btn" data-filter="brand">Brand</button>
    <button class="filter-btn" data-filter="web">Web</button>
    <button class="filter-btn" data-filter="design">Designs</button>
  </div>

  <div class="projects-grid">
    <div class="card" data-category="brand">
      <img src="{{ asset('assets/img/001.png') }}" alt="Mambo">
      <h3>Mambo</h3>
      <a href="#">Demo →</a>
    </div>
    <div class="card" data-category="brand">
      <img src="{{ asset('assets/img/002.png') }}" alt="Bendous">
      <h3>Bendous</h3>
      <a href="#">Demo →</a>
    </div>
    <div class="card" data-category="web">
      <img src="{{ asset('assets/img/003.png') }}" alt="Ida Tech">
      <h3>Ida Tech</h3>
      <a href="#">Demo →</a>
    </div>
    <div class="card" data-category="design">
      <img src="{{ asset('assets/img/004.png') }}" alt="Growing in Knowledge">
      <h3>Growing in Knowledge</h3>
      <a href="#">Demo →</a>
    </div>
    <div class="card" data-category="design">
      <img src="{{ asset('assets/img/005.png') }}" alt="Folheto com três dobras">
      <h3>Folheto com três dobras</h3>
      <a href="#">Demo →</a>
    </div>
    <div class="card" data-category="web">
      <img src="{{ asset('assets/img/006.png') }}" alt="Landing Page | Natura Lee">
      <h3>Landing Page | Natura Lee</h3>
      <a href="#">Demo →</a>
    </div>
  </div>
</section>

<style>
    /*     body {
    font-family: 'Poppins', sans-serif;
    background: #fff;
    margin: 0;
    padding: 0;
    } */

    .recent-work {
    max-width: 1100px;
    margin: 0 auto;
    padding: 40px 20px;
    text-align: center;
    }

    .recent-work h2 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 8px;
    }

    .recent-work p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 30px;
    }

    .filters {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 40px;
    }

    .filters button {
    background: none;
    border: none;
    font-size: 1rem;
    padding: 8px 16px;
    cursor: pointer;
    color: #444;
    border-radius: 20px;
    transition: background 0.3s, color 0.3s;
    }

    .filters .active {
    background: #0262d1;
    color: #fff;
    font-weight: bold;
    box-shadow: 0 4px 10px rgba(126, 58, 242, 0.3);
    }

    .projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    }

    .card {
    background: #fff;
    border-radius: 1px;
    box-shadow: 0 10px 20px rgba(58, 89, 242, 0.727);
    overflow: hidden;
    text-align: left;
    transition: transform 0.3s;
    }

    .card:hover {
    transform: translateY(-5px);
    }

    .card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    }

    .card h3 {
        text-align: left;
    padding: 16px 16px 4px;
    font-size: 1rem;
    color: #222;
    }

    .card a {
    padding: 0 16px 16px;
    display: inline-block;
    color: #0262d1;
    text-decoration: none;
    font-weight: 500;
    }

    .filters .filter-btn.active {
    background: #0262d1;
    color: #fff;
    font-weight: bold;
    box-shadow: 0 4px 10px rgb(58, 95, 242);
    }


</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const cards = document.querySelectorAll(".projects-grid .card");

    filterButtons.forEach(button => {
      button.addEventListener("click", () => {
        // Remove classe ativa de todos
        filterButtons.forEach(btn => btn.classList.remove("active"));
        button.classList.add("active");

        const filter = button.getAttribute("data-filter");

        cards.forEach(card => {
          const category = card.getAttribute("data-category");

          if (filter === "all" || category === filter) {
            card.style.display = "block";
          } else {
            card.style.display = "none";
          }
        });
      });
    });
  });
</script>

          <!-- quinta Section -->

<section class="works-section">
  <div class="works-container">
    <div class="works-text">
      <div class="works-subtitle">
        <span>Impressões criativas e profissionais</span>
      </div>
      <h2 class="works-title">Design de cartões de visita & folheto com 3 dobras</h2>
      <p class="works-description">
        Crie uma impressão duradoura com nossos designs personalizados de cartões de visita e folhetos com 3 dobras.
        Oferecemos soluções criativas e profissionais, adaptadas à identidade da sua marca. Seja para deixar um cartão
        de visita marcante ou um folheto informativo e impactante, garantimos um design de alta qualidade que se destaca
        e transmite sua mensagem de forma eficaz e memorável.
      </p>
      <a href="#" class="works-btn-purple">Quero começar agora</a>
    </div>

    <div class="works-carousel-wrapper">
      <span class="works-arrow works-arrow-left" onclick="scrollWorks(-1)">&#10094;</span>

      <div class="works-carousel" id="worksCarousel">
        <div class="works-card-wrapper works-brown">
          <div class="works-card">
            <img src="{{ asset('assets/img/C007.png') }}" alt="Cartão 1">
          </div>
        </div>

        <div class="works-card-wrapper works-blue">
          <div class="works-card">
            <img src="{{ asset('assets/img/C008.png') }}" alt="Cartão 2">
          </div>
        </div>

        <div class="works-card-wrapper works-blue">
          <div class="works-card">
            <img src="{{ asset('assets/img/C009.png') }}" alt="Cartão 2">
          </div>
        </div>

        <div class="works-card-wrapper works-gray">
          <div class="works-card">
            <img src="{{ asset('assets/img/003.png') }}" alt="Cartão 3">
          </div>
        </div>
      </div>

      <span class="works-arrow works-arrow-right" onclick="scrollWorks(1)">&#10095;</span>
    </div>
  </div>
</section>

<style>
    .works-section {
  padding: 60px 230px;
  font-family: Arial, sans-serif;
  background: #fff;
    }

    .works-container {
    max-width: 1100px;
    margin: 0 auto;
    }

    .works-text {
    max-width: 700px;
    margin-bottom: 40px;
    }

    /*     .works-subtitle {
    color: #0262d1;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 10px;
    } */

        .works-subtitle {
    position: relative;
    padding-left: 26px;
    color: #0262d1;
    font-weight: 600;
    display: flex;
    align-items: center;
    font-size: 16px;
    margin-bottom: 10px;
    }

    .works-subtitle::before {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 10px;
    height: 20px;
    background-color: #0262d1;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    }


    .works-title {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 15px;
    color: #111;
    }

    .works-description {
    font-size: 16px;
    line-height: 1.6;
    color: #333;
    }

    .works-btn-purple {
    margin-top: 20px;
    display: inline-block;
    background-color: #0262d1;
    color: #fff;
    padding: 14px 26px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s ease;
    }

    .works-btn-purple:hover {
    background-color: #014fb1;
    }

    /* NOVO: Wrapper do carrossel para manter setas fixas */
    .works-carousel-wrapper {
    position: relative;
    margin-top: 40px;
    }

    .works-carousel {
    display: flex;
    gap: 24px;
    overflow-x: hidden;
    padding-bottom: 20px;
    scroll-behavior: smooth;

    /* Oculta barra de rolagem no Firefox */
    scrollbar-width: none;

    /* Oculta barra de rolagem no Chrome/Safari */
    }

    .works-carousel::-webkit-scrollbar {
    display: none;
    }

    .works-card-wrapper {
    border-radius: 1px;
    padding: 20px;
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 330px;
    height: 330px;
    }

    .works-brown {
    background: #4a1900;
    }

    .works-blue {
    background: #1e6eff;
    }

    .works-gray {
    background: #c0b7b1;
    }

    .works-card {
    position: relative;
    width: 100%;
    height: 100%;
    }

    .works-card-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 1px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    /* NOVO: Setas fixas fora do carrossel */
    .works-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 22px;
    background-color: rgba(0, 72, 255, 0.4);
    color: #fff;
    padding: 6px 10px;
    border-radius: 50%;
    cursor: pointer;
    user-select: none;
    z-index: 20;
    }

    .works-arrow-left {
    left: -30px;
    }

    .works-arrow-right {
    right: -30px;
    }

    @media (max-width: 768px) {
    .works-section {
        padding: 40px 20px;
    }

    .works-text {
        max-width: 100%;
    }

    .works-carousel {
        flex-direction: column;
        overflow-x: hidden;
    }

    .works-card-wrapper {
        width: 100%;
        max-width: 320px;
        height: 320px;
        margin: 0 auto;
    }

    .works-arrow {
        display: none;
    }
    }

</style>

<script>
  function scrollWorks(direction) {
    const carousel = document.getElementById('worksCarousel');
    const cardWidth = carousel.querySelector('.works-card-wrapper').offsetWidth + 34; // inclui o gap
    carousel.scrollBy({
      left: direction * cardWidth,
      behavior: 'smooth'
    });
  }
</script>

          <!-- quinta Section -->

<section class="logotipo-works-section">
  <div class="logotipo-works-container">
    <div class="logotipo-works-text">
      <div class="logotipo-works-subtitle">
        <span>Impressões criativas e profissionais</span>
      </div>
      <h2 class="logotipo-works-title">Design de cartões de visita & folheto com 3 dobras</h2>
      <p class="logotipo-works-description">
        Crie uma impressão duradoura com nossos designs personalizados de cartões de visita e folhetos com 3 dobras.
        Oferecemos soluções criativas e profissionais, adaptadas à identidade da sua marca. Seja para deixar um cartão
        de visita marcante ou um folheto informativo e impactante, garantimos um design de alta qualidade que se destaca
        e transmite sua mensagem de forma eficaz e memorável.
      </p>
      <a href="#" class="logotipo-works-btn-purple">Quero começar agora</a>
    </div>

    <div class="logotipo-works-carousel-wrapper">
      <span class="logotipo-works-arrow logotipo-works-arrow-left" onclick="scrollLogotipoWorks(-1)">&#10094;</span>

      <div class="logotipo-works-carousel" id="logotipoWorksCarousel">
        <div class="logotipo-works-card-wrapper logotipo-works-brown">
          <div class="logotipo-works-card">
            <img src="{{ asset('assets/img/001.png') }}" alt="Cartão 1">
          </div>
        </div>

        <div class="logotipo-works-card-wrapper logotipo-works-blue">
          <div class="logotipo-works-card">
            <img src="{{ asset('assets/img/002.png') }}" alt="Cartão 2">
          </div>
        </div>

        <div class="logotipo-works-card-wrapper logotipo-works-blue">
          <div class="logotipo-works-card">
            <img src="{{ asset('assets/img/002.png') }}" alt="Cartão 2">
          </div>
        </div>

        <div class="logotipo-works-card-wrapper logotipo-works-gray">
          <div class="logotipo-works-card">
            <img src="{{ asset('assets/img/003.png') }}" alt="Cartão 3">
          </div>
        </div>
      </div>

      <span class="logotipo-works-arrow logotipo-works-arrow-right" onclick="scrollLogotipoWorks(1)">&#10095;</span>
    </div>
  </div>
</section>

<style>
  .logotipo-works-section {
    padding: 60px 230px;
    font-family: Arial, sans-serif;
    background: #fff;
  }

  .logotipo-works-container {
    max-width: 1100px;
    margin: 0 auto;
  }

  .logotipo-works-text {
    max-width: 700px;
    margin-bottom: 40px;
  }

  /*   .logotipo-works-subtitle {
    color: #0262d1;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 10px;
  } */
          .logotipo-works-subtitle {
    position: relative;
    padding-left: 26px;
    color: #0262d1;
    font-weight: 600;
    display: flex;
    align-items: center;
    font-size: 16px;
    margin-bottom: 10px;
    }

    .logotipo-works-subtitle::before {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 10px;
    height: 20px;
    background-color: #0262d1;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    }

  .logotipo-works-title {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 15px;
    color: #111;
  }

  .logotipo-works-description {
    font-size: 16px;
    line-height: 1.6;
    color: #333;
  }

  .logotipo-works-btn-purple {
    margin-top: 20px;
    display: inline-block;
    background-color: #0262d1;
    color: #fff;
    padding: 14px 26px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s ease;
  }

  .logotipo-works-btn-purple:hover {
    background-color: #014fb1;
  }

  .logotipo-works-carousel-wrapper {
    position: relative;
    margin-top: 40px;
  }

  .logotipo-works-carousel {
    display: flex;
    gap: 24px;
    overflow-x: hidden;
    padding-bottom: 20px;
    scroll-behavior: smooth;
    scrollbar-width: none;
  }

  .logotipo-works-carousel::-webkit-scrollbar {
    display: none;
  }

  .logotipo-works-card-wrapper {
    border-radius: 1px;
    padding: 20px;
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 330px;
    height: 330px;
  }

  .logotipo-works-brown {
    background: #4a1900;
  }

  .logotipo-works-blue {
    background: #1e6eff;
  }

  .logotipo-works-gray {
    background: #c0b7b1;
  }

  .logotipo-works-card {
    position: relative;
    width: 100%;
    height: 100%;
  }

  .logotipo-works-card-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 1px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
  }

  .logotipo-works-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 22px;
    background-color: rgba(0, 72, 255, 0.4);
    color: #fff;
    padding: 6px 10px;
    border-radius: 50%;
    cursor: pointer;
    user-select: none;
    z-index: 20;
  }

  .logotipo-works-arrow-left {
    left: -30px;
  }

  .logotipo-works-arrow-right {
    right: -30px;
  }

  @media (max-width: 768px) {
    .logotipo-works-section {
      padding: 40px 20px;
    }

    .logotipo-works-text {
      max-width: 100%;
    }

    .logotipo-works-carousel {
      flex-direction: column;
      overflow-x: hidden;
    }

    .logotipo-works-card-wrapper {
      width: 100%;
      max-width: 320px;
      height: 320px;
      margin: 0 auto;
    }

    .logotipo-works-arrow {
      display: none;
    }
  }
</style>

<script>
  function scrollLogotipoWorks(direction) {
    const carousel = document.getElementById('logotipoWorksCarousel');
    const cardWidth = carousel.querySelector('.logotipo-works-card-wrapper').offsetWidth + 34;
    carousel.scrollBy({
      left: direction * cardWidth,
      behavior: 'smooth'
    });
  }
</script>

          <!-- quinta Section -->

<section class="faq-section">
  <div class="faq-container">
    <div class="faq-left">
      <h4 class="skills-first-title" ><i class="ph-fill ph-identification-badge purple-icon"></i> Apoio ao Cliente</h4>
      <h2>Ficou com<br><strong>alguma dúvida?</strong></h2>
      <p>Estamos aqui para esclarecer tudo para você!</p>
      <a href="#" class="faq-btn">Tire todas as suas dúvidas</a>
    </div>

    <div class="faq-right">
      <div class="faq-item">
        <button class="faq-toggle">
          <i class="ph ph-caret-down"></i>
          <span>Qual plano da Tchitunda é ideal para o meu negócio?</span>
        </button>
        <div class="faq-content">
          A Tchitunda oferece planos personalizados de acordo com as necessidades do seu negócio. Podemos ajudar a escolher o plano mais adequado, considerando o tamanho da sua empresa, seus objetivos e as ferramentas necessárias para atingir suas metas.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-toggle">
          <i class="ph ph-caret-down"></i>
          <span>Como a Tchitunda gerencia redes sociais?</span>
        </button>
        <div class="faq-content">Conteúdo oculto.</div>
      </div>

      <div class="faq-item">
        <button class="faq-toggle">
          <i class="ph ph-caret-down"></i>
          <span>Como a Tchitunda otimiza landing pages para conversões?</span>
        </button>
        <div class="faq-content">Conteúdo oculto.</div>
      </div>

      <div class="faq-item">
        <button class="faq-toggle">
          <i class="ph ph-caret-down"></i>
          <span>Qual assinatura da Tchitunda atende melhor à minha empresa?</span>
        </button>
        <div class="faq-content">Conteúdo oculto.</div>
      </div>
    </div>
  </div>
</section>

<style>
    @import url('https://unpkg.com/@phosphor-icons/web@2.0.3/src/phosphor.css');

    

        .faq-section {
        padding: 80px 230px;
        
         font-family: 'Poppins', sans-serif;
        margin: 0;
        background: #fff;
        }

        .faq-container {
        display: flex;
        gap: 80px;
        align-items: flex-start;
        }

        .faq-left {
        max-width: 400px;
        }

        .faq-left h4 {

        color: #0262d1;;
        font-size: 18px;
        display: flex;
        align-items: center;
        gap: 6px;
        margin-bottom: 10px;
        }

        .faq-left h2 {
        font-size: 32px;
        font-weight: 500;
        line-height: 1.3;
        }

        .faq-left h2 strong {
        font-weight: 700;
        }

        .faq-left p {
        margin: 16px 0 24px;
        color: #666;
        font-size: 16px;
        }

        .faq-btn {
        background: #0262d1;;
        color: white;
        padding: 14px 24px;
        text-decoration: none;
        border-radius: 8px;
        display: inline-block;
        font-weight: 600;
        }

        .faq-right {
        flex: 1;
        }

        .faq-item {
        margin-bottom: 20px;
        }

        .faq-toggle {
        width: 100%;
        background: #e9f1fe;
        border: none;
        border-radius: 12px;
        padding: 18px 20px;
        display: flex;
        align-items: center;
        gap: 16px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        text-align: left;
        transition: all 0.3s ease;
        }

        .faq-toggle i {
        font-size: 20px;
        color: #333;
        transition: transform 0.3s ease;
        }

        .faq-toggle.open i {
        transform: rotate(180deg);
        }

        .faq-content {
        display: none;
        padding: 12px 20px 0;
        font-size: 15px;
        color: #555;
        line-height: 1.6;
        }

            .skills-first-title {
        position: relative;
        padding-left: 16px;
        color: #0262d1;
        font-weight: 600;
        font-size: 18px;
        }

        .skills-first-title::before {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 10px;
        height: 20px;
        background-color: #0262d1;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        }

</style>

<script>
  const toggles = document.querySelectorAll('.faq-toggle');

  toggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
      const content = toggle.nextElementSibling;
      const isOpen = toggle.classList.contains('open');

      // Fecha todos
      document.querySelectorAll('.faq-toggle').forEach(btn => btn.classList.remove('open'));
      document.querySelectorAll('.faq-content').forEach(c => c.style.display = 'none');

      // Abre se não estiver aberto
      if (!isOpen) {
        toggle.classList.add('open');
        content.style.display = 'block';
      }
    });
  });
</script>
        




</main>

@endsection