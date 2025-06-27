@extends('layouts.app')
@section('title', 'Kivula')
@section('content')

<main>


<section class="about-hero">
  <div class="about-container">
    <!-- Texto -->
    <div class="about-text">
      <h1>Somos um grupo exclusivo de jovens inovadores.</h1>
      <p>
        Um seleto time de jovens criativos, impulsionados pela paixão pela arte e pela resolução de desafios.
        Com mais de 5 anos de experiência, transformamos ideias em marcas sólidas e inovadoras, conectando-as de maneira única ao mundo digital.
      </p>
    </div>

    <!-- Imagem com gradiente -->
    <div class="about-image">
      <img src="{{ asset('assets/img/capa31.jpg') }}" alt="Jovens com notebook">
      <div class="image-gradient"></div>
    </div>
  </div>
</section>

<style>
    .about-hero {
    width: 100%;
    padding: 80px 60px; /* Aumentei o padding lateral de 20px para 60px */
    background: #fff;
    }

    .about-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1100px; /* Reduzido para aumentar o espaço lateral */
    margin: 0 auto;
    flex-wrap: wrap;
    gap: 40px;
    }

    .about-text {
    flex: 1;
    min-width: 300px;
    }

    .about-text h1 {
    font-size: 3rem;
    font-weight: 800;
    color: #111;
    line-height: 1.2;
    }

    .about-text p {
    font-size: 1rem;
    color: #4f4f6b;
    margin-top: 20px;
    max-width: 550px;
    line-height: 1.6;
    }

    .about-image {
    position: relative;
    flex: 1;
    min-width: 320px;
    display: flex;
    align-items: center;
    justify-content: center;
    }

    .about-image img {
    max-width: 100%;
    height: auto;
    display: block;
    z-index: 1;
    position: relative;
    }

    .image-gradient {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 80px;
    background: linear-gradient(to bottom, transparent 0%, white 100%);
    z-index: 2;
    }
</style>

         <!-- Segunda Section -->

<section class="trajectory-section">
  <div class="trajectory-container">

    <!-- Imagem com gradiente -->
    <div class="trajectory-image">
      <img src="{{ asset('assets/img/capa32.jpg') }}" alt="Grupo de pessoas">
      <div class="trajectory-gradient-top"></div>
      <div class="trajectory-logo"></div>
    </div>

    <!-- Texto -->
    <div class="trajectory-text">
      <span class="trajectory-label" >Nossa trajetória</span>
      <h2 class="trajectory-title">Uma jornada marcada por criatividade, inovação e crescimento</h2>
      <p class="trajectory-desc">
        A Tchitunda nasceu para simplificar o processo de levar ideias ao digital. Nosso foco é transformar ideias em resultados reais, conectando projetos criativos ao público ideal por meio de serviços digitais, branding e estratégias personalizadas. Nossa missão é ajudar você a transformar suas ideias em realidade e alcançar seus objetivos no digital.
      </p>
    </div>

  </div>
</section>

<style>
        .trajectory-section {
    width: 100%;
    padding: 80px 80px; /* Margens laterais aumentadas de 60px para 80px */
    background: #fff;
    }

    .trajectory-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 60px;
    max-width: 1100px; /* Reduzido de 1400px para 1100px para mais margem */
    margin: 0 auto;
    flex-wrap: wrap;
    }

    .trajectory-image {
    position: relative;
    flex: 1;
    min-width: 300px;
    border-radius: 12px;
    overflow: hidden;
    max-width: 580px;
    }

    .trajectory-image img {
    max-width: 100%;
    height: auto;
    display: block;
    z-index: 1;
    position: relative;
    }

    /* Gradiente que desce mais do topo da imagem */
    .trajectory-gradient-top {
    position: absolute;
    top: 0;
    width: 100%;
    height: 150px; /* Aumentado para descer mais */
    background: linear-gradient(to bottom, #ffffff 0%, transparent 100%);
    z-index: 2;

    }



    .trajectory-logo {
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 2.2rem;
    font-weight: 700;
    color: white;
    z-index: 2;
    font-family: sans-serif;
    text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    .trajectory-text {
    flex: 1;
    min-width: 320px;
    }

    .trajectory-label {
    display: inline-block;
    font-weight: 600;
    color: #0262d1;
    margin-bottom: 10px;

    padding-left: 10px;
    }

    .trajectory-title {
    font-size: 2rem;
    font-weight: 800;
    color: #111;
    margin-bottom: 20px;
    line-height: 1.3;
    }

    .trajectory-desc {
    color: #4f4f6b;
    font-size: 1rem;
    line-height: 1.6;
    max-width: 600px;
    }


</style>

          <!-- Terceira Section -->

<section class="skills-section">
  <div class="skills-wrapper">
    <div class="skills-left">
     <h4 class="skills-first-title"><i class="ph-fill ph-identification-badge purple-icon"></i> Habilidades</h4>
      <h2>Combinamos tecnologia e talento</h2>
      <p>
        Na Tchitunda, combinamos tecnologia de ponta com o talento criativo da nossa equipe para criar soluções digitais únicas.
        Utilizamos as melhores ferramentas e estratégias para transformar ideias em resultados tangíveis, sempre com foco em inovação e personalização.
        Nossa abordagem integra o melhor da tecnologia com a expertise humana, garantindo que cada projeto atinja seu máximo potencial e se conecte de forma eficaz com o público-alvo.
      </p>
    </div>

    <div class="skills-right">
      <div class="skills-card">
        <div class="skills-header">
          <div class="skills-icon"><i class="ph ph-brackets-curly"></i></div>
          <div class="skills-title">
            <strong>Desenvolvimento Frontend</strong>
            <p class="sub">Mais de 5 anos</p>
          </div>
          <div class="skills-arrow"><i class="ph ph-caret-right"></i></div>
        </div>

        <div class="bar">
          <span>HTML</span>
          <div class="bar-bg">
            <div class="bar-fill" style="width: 90%"></div>
          </div>
          <span>90%</span>
        </div>

        <div class="bar">
          <span>CSS</span>
          <div class="bar-bg">
            <div class="bar-fill" style="width: 85%"></div>
          </div>
          <span>85%</span>
        </div>

        <div class="bar">
          <span>JavaScript</span>
          <div class="bar-bg">
            <div class="bar-fill" style="width: 70%"></div>
          </div>
          <span>70%</span>
        </div>

        <div class="bar">
          <span>React</span>
          <div class="bar-bg">
            <div class="bar-fill" style="width: 60%"></div>
          </div>
          <span>60%</span>
        </div>
      </div>

      <div class="skills-card small">
        <div class="skills-header">
          <div class="skills-icon"><i class="ph ph-pencil-simple-line"></i></div>
          <div class="skills-title">
            <strong>Designer</strong>
            <p class="sub">Mais de 4 anos</p>
          </div>
          <div class="skills-arrow"><i class="ph ph-caret-down"></i></div>
        </div>
      </div>

      <div class="skills-card small">
        <div class="skills-header">
          <div class="skills-icon"><i class="ph ph-megaphone-simple"></i></div>
          <div class="skills-title">
            <strong>Marketing Digital</strong>
            <p class="sub">Mais de 5 anos</p>
          </div>
          <div class="skills-arrow"><i class="ph ph-caret-down"></i></div>
        </div>
      </div>
    </div>
  </div>
</section>


<style>


    .skills-section {
    padding: 80px 150px;
    }

    .skills-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 80px;
    }

    .skills-left {
    flex: 1;
    max-width: 600px;
    }

    .skills-left h4 {

    color: #0262d1;
    font-size: 18px;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 6px;
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


    .purple-icon {
        
    font-size: 20px;
    }

    .skills-left h2 {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 20px;
    }

    .skills-left p {
    font-size: 16px;
    line-height: 1.7;
    color: #333;
    }

    .skills-right {
    flex: 1;
    max-width: 580px;
    }

    .skills-card {
    background: #f9f8fe;
    border-radius: 16px;
    padding: 24px;
    margin-bottom: 20px;
    }

    .skills-card.small {
    padding: 20px;
    }

    .skills-header {
    display: flex;
    align-items: center;
    gap: 16px;
    }

    .skills-icon {
    background: #e9f1fe;
    padding: 12px;
    border-radius: 16px;
    font-size: 24px;
    color: #0262d1;
    }

    .skills-title strong {
    display: block;
    font-size: 16px;
    }

    .skills-title .sub {
    font-size: 14px;
    color: #555;
    margin-top: 2px;
    }

    .skills-arrow {
    margin-left: auto;
    font-size: 20px;
    color: #000;
    }

    .bar {
    display: flex;
    align-items: center;
    margin-top: 18px;
    font-size: 14px;
    gap: 10px;
    }

    .bar span:first-child {
    width: 90px;
    }

    .bar-bg {
    flex: 1;
    background: #ede9fe;
    height: 6px;
    border-radius: 4px;
    position: relative;
    }

    .bar-fill {
    background: #0262d1;
    height: 6px;
    border-radius: 4px;
    transition: width 1s ease-in-out;
    }


</style>

          <!-- Quarta Section -->

<section class="numbers-section">
  <div class="numbers-wrapper">
    <div class="numbers-left">
      <h4 class="skills-first-title" ><i class="ph-fill ph-identification-badge purple-icon"></i> Nossos números</h4>
      <h2>Somos mais do que a maior e mais completa agência de marketing digital.</h2>
      <p>
        Somos pioneiros na evolução do marketing digital, desafiando os padrões convencionais. 
        Nossa abordagem estratégica e criativa vai além de seguir tendências: buscamos liderar e definir novos caminhos no mercado. 
        Com soluções inovadoras e integradas, conectamos marcas ao futuro, ajudando-as a alcançar resultados extraordinários.
      </p>
    </div>

    <div class="numbers-boxes">
    <div class="card">
        <strong class="counter" data-target="7">0</strong>
        <span>Colaboradores engajados</span>
    </div>
    <div class="card">
        <strong class="counter" data-target="15">0</strong>
        <span>Assinantes</span>
    </div>
    <div class="card">
        <strong class="counter" data-target="1300">0</strong>
        <span>Clientes satisfeitos</span>
    </div>
    </div>

  </div>
</section>

<style>
    @import url('https://unpkg.com/@phosphor-icons/web@2.0.3/src/phosphor.css');


    .numbers-section {
    padding: 80px 200px;
    background: #f9f9f9;
    }

    .numbers-wrapper {
    display: flex;
    flex-direction: column;
    gap: 40px;
    }

    .numbers-left {
    max-width: 700px;
    }

    .numbers-left h4 {

    color: #0262d1;
    font-size: 18px;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 6px;
    }

    .numbers-left h2 {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #000;
    }

    .numbers-left p {
    font-size: 16px;
    line-height: 1.7;
    color: #666;
    }

    .numbers-boxes {
    display: flex;
    gap: 24px;
    flex-wrap: wrap;
    }

    .card {
    flex: 1;
    min-width: 240px;
    background: linear-gradient(to right, #0262d1, #042b86);
    border-radius: 12px;
    padding: 30px 20px;
    text-align: center;
    color: white;
    box-shadow: 0 0 0 2px #ececec;
    transition: transform 0.3s;
    }

    .card:hover {
    transform: translateY(-4px);
    }

    .card strong {
    font-size: 28px;
    display: block;
    font-weight: 700;
    margin-bottom: 6px;
    }

    .card span {
    font-size: 16px;
    }

    .purple-icon {
    font-size: 20px;
    }

</style>

<script>
  const counters = document.querySelectorAll('.counter');

  const animateCount = (counter) => {
    const updateCount = () => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText.replace(/\D/g, '');
      const increment = Math.ceil(target / 100);

      if (count < target) {
        counter.innerText = '+' + new Intl.NumberFormat().format(count + increment);
        setTimeout(updateCount, 30);
      } else {
        counter.innerText = '+' + new Intl.NumberFormat().format(target);
      }
    };

    updateCount();
  };

  // Detectar quando os cards entram na tela
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCount(entry.target);
        observer.unobserve(entry.target); // contar só uma vez
      }
    });
  }, { threshold: 0.6 });

  counters.forEach(counter => observer.observe(counter));
</script>


          <!-- quinta Section -->

<section class="faq-section">
  <div class="faq-container">
    <div class="faq-left">
      <h4 class="skills-first-title"><i class="ph-fill ph-identification-badge purple-icon"></i> Apoio ao Cliente</h4>
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
        padding: 80px 190px;
        
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