@extends('layouts.app')
@section('title', 'Kivula')
@section('content')

<main class="main">


<!-- Hero Section Personalizado -->
<section class="hero-section">
  <div class="hero-container" style="display:flex; gap: 2rem; padding: 0.5rem 2rem 2rem 2rem;">
    <div class="hero-left" style="flex:1; color:#fff;">
      <h1>Se você pode imaginar, nós podemos projectar!</h1>
      <p>Tenha uma equipe disponível a qualquer momento para entender todas as necessidades do seu projeto ou negócio.</p>
      <a href="#contact" class="hero-btn" style="display:inline-block; padding: 10px 20px; background:#007bff; color:#fff; text-decoration:none; border-radius:5px;">Quero começar agora</a>
    </div>

    <div class="hero-right" style="flex:1; position:relative; height:400px;">
      <canvas id="canvas" style="position:absolute; top:0; left:0; width:100%; height:100%;"></canvas>
    </div>
  </div>
</section>

<script>
  const canvas = document.getElementById('canvas');
  const ctx = canvas.getContext('2d');

  let w, h;

  function resize() {
    const rect = canvas.parentElement.getBoundingClientRect();
    w = canvas.width = rect.width;
    h = canvas.height = rect.height;
  }
  resize();
  window.addEventListener('resize', resize);

  const particles = [];
  const radius = 150;
  const total = 1000;

  for (let i = 0; i < total; i++) {
    const phi = Math.acos(2 * Math.random() - 1);
    const theta = Math.random() * 2 * Math.PI;

    const x = radius * Math.sin(phi) * Math.cos(theta);
    const y = radius * Math.sin(phi) * Math.sin(theta);
    const z = radius * Math.cos(phi);

    particles.push({ x, y, z });
  }

  let angleX = 0;
  let angleY = 0;

  // Inicialmente o mouse fora da tela
  let mouseX = -1000;
  let mouseY = -1000;
  let isHovering = false;

  // Vamos testar se o evento está disparando
  canvas.addEventListener('mousemove', e => {
    const rect = canvas.getBoundingClientRect();
    mouseX = e.clientX - rect.left;
    mouseY = e.clientY - rect.top;
    isHovering = true;
    // DEBUG: mostrar coords no console
    console.log('Mouse move:', mouseX, mouseY);
  });

  canvas.addEventListener('mouseleave', () => {
    isHovering = false;
    mouseX = -1000;
    mouseY = -1000;
  });

  function rotate3D(point, angleX, angleY) {
    let x = point.x * Math.cos(angleY) - point.z * Math.sin(angleY);
    let z = point.x * Math.sin(angleY) + point.z * Math.cos(angleY);

    let y = point.y * Math.cos(angleX) - z * Math.sin(angleX);
    z = point.y * Math.sin(angleX) + z * Math.cos(angleX);

    return { x, y, z };
  }

  function draw() {
    ctx.clearRect(0, 0, w, h);

    angleX += 0.003;
    angleY += 0.004;

    for (let p of particles) {
      const rotated = rotate3D(p, angleX, angleY);
      const perspective = 400 / (400 + rotated.z);

      const baseX = rotated.x * perspective + w / 2;
      const baseY = rotated.y * perspective + h / 2;

      const dist = Math.hypot(mouseX - baseX, mouseY - baseY);

      let offsetX = 0;
      let offsetY = 0;

      if (isHovering && dist < 100) {
        const dx = baseX - mouseX;
        const dy = baseY - mouseY;
        const force = (100 - dist) / 100 * 50;
        const angle = Math.atan2(dy, dx);
        offsetX = Math.cos(angle) * force;
        offsetY = Math.sin(angle) * force;
      }

      const finalX = baseX + offsetX;
      const finalY = baseY + offsetY;

      const size = perspective * 3;

      ctx.beginPath();
      ctx.arc(finalX, finalY, size, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(0, 123, 255, ${perspective})`;
      ctx.fill();
    }

    requestAnimationFrame(draw);
  }

  draw();
</script>
<!-- Hero Section Personalizado -->


<!-- Trilha Section -->
<section class="section-trilha">
  <div class="trilha-container">
    <div class="trilha-header">
      <div class="trilha-intro">
        <span class="trilha-tag">Trilha</span>
        <h2 class="trilha-titulo">
          Descubra como a Tchitunda pode <br>
          ajudar você a transformar suas <br>
          ideias em realidade.
        </h2>
      </div>
      <div class="trilha-desc">
        <p class="trilha-texto">
          Reunimos todos as soluções para você <br>
          entrar no digital. Não sabe por onde <br>
          começar? A gente te ajuda.
        </p>
      </div>
    </div>

    <div class="trilha-cards">
      <div class="trilha-card">
        <div class="trilha-icon-wrapper">
          <i data-lucide="palette"></i> <!-- Design -->
        </div>
        <h3 class="trilha-card-title">Um Design Exclusivo</h3>
        <p class="trilha-card-desc">Transforme sua visão em um design único.</p>
        <a href="#" class="trilha-btn">Saiba mais</a>
      </div>

      <div class="trilha-card">
        <div class="trilha-icon-wrapper">
          <i data-lucide="globe"></i> <!-- Site -->
        </div>
        <h3 class="trilha-card-title">Site Sob Medida</h3>
        <p class="trilha-card-desc">Desenvolva um site que reflita sua marca.</p>
        <a href="#" class="trilha-btn">Saiba mais</a>
      </div>

      <div class="trilha-card">
        <div class="trilha-icon-wrapper">
          <i data-lucide="bar-chart-3"></i> <!-- Marketing -->
        </div>
        <h3 class="trilha-card-title">Marketing Estratégico</h3>
        <p class="trilha-card-desc">Impulsione seu negócio com estratégias eficazes.</p>
        <a href="#" class="trilha-btn">Saiba mais</a>
      </div>

      <div class="trilha-card">
        <div class="trilha-icon-wrapper">
          <i data-lucide="share-2"></i> <!-- Social Media -->
        </div>
        <h3 class="trilha-card-title">Social Media</h3>
        <p class="trilha-card-desc">Otimize sua presença nas redes sociais.</p>
        <a href="#" class="trilha-btn">Saiba mais</a>
      </div>
    </div>
  </div>
</section>
<!-- /Trilha Section -->


<!-- Stats Section -->
<section class="solucoes-section">
    <div class="solucoes-wrapper">
      <!-- Texto + Cards -->
      <div class="solucoes-textos">
        <div class="solucoes-etiqueta">
          <span class="barra"></span>
          <span class="texto">Soluções</span>
        </div>

        <h2 class="solucoes-titulo">
          Otimize a execução do seu <strong>Design, Marketing e<br>Website</strong> com a Tchitunda.
        </h2>

        <div class="solucoes-cards">

          <!-- Card 1 -->
          <input type="radio" name="card" id="card1" class="card-toggle">
          <label class="card-item" for="card1">
            <div class="card-topo">
              <span class="icone"><i class="ph ph-wrench"></i></span>
              <span class="titulo">Design</span>
              <span class="seta"><i class="ph ph-caret-down"></i></span>
            </div>
            <div class="card-corpo">
              <p>
                Criamos identidades visuais fortes, layouts modernos e designs que se destacam, com foco na experiência do usuário e na comunicação clara.
              </p>
            </div>
          </label>

          <!-- Card 2 -->
          <input type="radio" name="card" id="card2" class="card-toggle">
          <label class="card-item" for="card2">
            <div class="card-topo">
              <span class="icone"><i class="ph ph-headphones"></i></span>
              <span class="titulo">Marketing Digital</span>
              <span class="seta"><i class="ph ph-caret-down"></i></span>
            </div>
            <div class="card-corpo">
              <p>
                Estratégias personalizadas de marketing digital para aumentar sua visibilidade online, atrair leads e gerar resultados reais.
              </p>
            </div>
          </label>

          <!-- Card 3 -->
          <input type="radio" name="card" id="card3" class="card-toggle" checked>
          <label class="card-item" for="card3">
            <div class="card-topo">
              <span class="icone"><i class="ph ph-code"></i></span>
              <span class="titulo">Desenvolvimento de Websites</span>
              <span class="seta"><i class="ph ph-caret-down"></i></span>
            </div>
            <div class="card-corpo">
              <p>
                Desenvolvemos websites profissionais e funcionais. Desde a criação de interfaces intuitivas até a
                otimização para dispositivos móveis, garantimos uma experiência de usuário excepcional.
              </p>
            </div>
          </label>

        </div>
      </div>

      <!-- Imagem -->
      <div class="solucoes-imagem">
        <img src="{{ asset('assets/img/capa15.jpg') }}" alt="Mockup" />
      </div>
    </div>
</section>
<!-- /Stats Section -->


  <!-- About Section -->
  <section class="sobre-nos">
    <div class="container">
      <div class="intro">
        <span class="tag">Sobre nós</span>
        <h2>
          Somos mais do que a maior e mais completa <br>
          agência de marketing digital.
        </h2>
        <p>
          Somos uma força inovadora, redefinindo o conceito de agência de marketing ao ultrapassar os limites tradicionais. 
          Com uma abordagem única e abrangente, não apenas seguimos as tendências do setor, mas também as criamos.
        </p>
      </div>

      <div class="stats">
        <div class="stat-box">
          <h3>+1,300</h3>
          <p>Clientes satisfeitos</p>
        </div>
        <div class="stat-box">
          <h3>+15</h3>
          <p>Assinantes</p>
        </div>
        <div class="stat-box">
          <h3>+1,000,000KZ</h3>
          <p>Em anúncios</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /About Section -->

  <!-- Clients Section -->
  <section id="clients" class="clients section">

    <div class="container">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "spaceBetween": 40
              },
              "480": {
                "slidesPerView": 3,
                "spaceBetween": 60
              },
              "640": {
                "slidesPerView": 4,
                "spaceBetween": 80
              },
              "992": {
                "slidesPerView": 6,
                "spaceBetween": 120
              }
            }
          }
        </script>
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-1.webp') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
          
        </div>
      </div>

    </div>

  </section>
  <!-- /Clients Section -->







  <!-- Faq Section -->
  <section id="faq" class="faq-section">
    <div class="faq-wrapper">
      <div class="faq-conteudo">

        <div class="faq-etiqueta">
          <span class="barra"></span>
          <span class="texto">Por que devo escolher a Tchitunda?</span>
        </div>

        <h2 class="faq-titulo">Projectando o seu <strong>Negócio</strong></h2>

        <p class="faq-intro">
          Em um cenário digital cada vez mais competitivo, escolher o parceiro certo para desenvolver e fortalecer sua marca é crucial.
        </p>

        <!-- Bloco 1 -->
        <div class="faq-item">
          <div class="faq-icon">
            <i class="ph ph-shield-check"></i>
          </div>
          <div class="faq-textos">
            <h3 class="faq-subtitulo">Expertise em Desenvolvimento de Marcas Digitais</h3>
            <p>
              Com mais de 5 anos de experiência, oferecemos um profundo conhecimento no desenvolvimento e implementação de marcas no ambiente digital.
              Nossa abordagem, focada na arte e na resolução de problemas, garante que cada projeto seja único, impactante e alinhado com os objetivos estratégicos da empresa.
            </p>
          </div>
        </div>

        <!-- Bloco 2 -->
        <div class="faq-item">
          <div class="faq-icon">
            <i class="ph ph-pencil-simple-line"></i>
          </div>
          <div class="faq-textos">
            <h3 class="faq-subtitulo">Criatividade e Paixão Infundidas em Cada Projeto</h3>
            <p>
              Somos um grupo exclusivo de jovens criativos apaixonados pela arte. Cada projeto que assumimos é movido pelo nosso desejo de superar
              expectativas e criar soluções visualmente impressionantes e funcionalmente eficazes.
            </p>
          </div>
        </div>

        <!-- Bloco 3 -->
        <div class="faq-item">
          <div class="faq-icon">
            <i class="ph ph-lightbulb"></i>
          </div>
          <div class="faq-textos">
            <h3 class="faq-subtitulo">Compromisso com a Inovação e Desafios</h3>
            <p>
              Estamos constantemente em busca de inovação e novos desafios. Nossa abordagem dinâmica e adaptável nos permite não apenas acompanhar,
              mas também antecipar as tendências do mercado digital. Ao escolher trabalhar conosco, as empresas podem contar com uma parceria
              que não só impulsiona sua presença digital, mas também abre novas oportunidades de crescimento e diferenciação no mercado.
            </p>
          </div>
        </div>

      </div>

      <div class="faq-imagem">
        <img src="{{ asset('assets/img/capa16.jpg') }}" alt="Imagem Equipe" />
      </div>
    </div>
  </section>
  <!-- /Faq Section -->


<!-- particles Section -->
{{-- <section id="particles" class="particles section" style="position:relative; height:auto; overflow:hidden;   background: linear-gradient(to right, #0262d1, #2b0486);">
  <div id="particles-js" style="position:absolute; width:100%; height:90%; top:0; left:0; z-index:0;"></div>

  <!-- Conteúdo sobre as partículas -->
  <div style="position:relative; z-index:1; width:100%; padding:60px 20px;">
    <div class="container contact-wrapper">

      <!-- Suporte ao Cliente -->
      <div class="contact-support">
        <span class="contact-label">Apoio ao Cliente</span>
        <h2 class="contact-title">Ficou com <br><strong>alguma dúvida?</strong></h2>
        <p class="contact-description">Estamos aqui para esclarecer tudo para você!</p>
        <a href="#" class="contact-btn contact-btn-primary">Tire todas as suas dúvidas</a>
      </div>

      <!-- Bate-papo + FAQ -->
      <div class="contact-chatfaq">

        <!-- Bate-papo -->
        <div class="contact-chatbox">
          <div class="contact-chatcontent">
            <div class="contact-chatimage">
              <img src="{{ asset('assets/img/logo1.png') }}" alt="Atendente com notebook">
            </div>
            <div class="contact-chattext">
              <span class="contact-chatlabel">Bate-papo</span>
              <h3 class="contact-chattitle">Vamos falar sobre o seu próximo projeto.</h3>
              <p class="contact-chatdesc">
                Estamos aqui para ouvir sobre o seu próximo projeto. Queremos conhecer suas ideias, entender suas necessidades e colaborar para transformar sua visão em realidade.
              </p>
              <a href="#" class="contact-btn contact-btn-secondary">Bora começar</a>
            </div>
          </div>
        </div>

        <!-- FAQ -->
        <div class="faq-contact">
          <div class="faq-contact-item">
            <button class="faq-contact-toggle">▼</button>
            <div class="faq-contact-text">
              <h4>Qual plano da Tchitunda é ideal para o meu negócio?</h4>
              <p>A Tchitunda oferece planos personalizados de acordo com as necessidades do seu negócio...</p>
            </div>
          </div>
          <div class="faq-contact-item">
            <button class="faq-contact-toggle">▼</button>
            <div class="faq-contact-text">
              <h4>Como a Tchitunda gerencia redes sociais?</h4>
            </div>
          </div>
          <div class="faq-contact-item">
            <button class="faq-contact-toggle">▼</button>
            <div class="faq-contact-text">
              <h4>Como a Tchitunda otimiza landing pages para conversões?</h4>
            </div>
          </div>
          <div class="faq-contact-item">
            <button class="faq-contact-toggle">▼</button>
            <div class="faq-contact-text">
              <h4>Qual assinatura da Tchitunda atende melhor à minha empresa?</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
  particlesJS('particles-js',
  {
    "particles": {
      "number": { "value": 100, "density": { "enable": true, "value_area": 800 } },
      "color": { "value": "#fff" },
      "shape": { "type": "circle", "stroke": { "width": 0, "color": "#000000" } },
      "opacity": { "value": 0.5, "random": false },
      "size": { "value": 5, "random": true },
      "line_linked": { "enable": true, "distance": 150, "color": "#fff", "opacity": 0.4, "width": 1 },
      "move": { "enable": true, "speed": 4, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": { "enable": true, "mode": "repulse" },
        "onclick": { "enable": true, "mode": "push" },
        "resize": true
      },
      "modes": {
        "repulse": { "distance": 100 },
        "push": { "particles_nb": 4 }
      }
    },
    "retina_detect": true
  });
</script> --}}

<!-- /particles Section -->


<!-- Seção de Contacto -->
<!-- Seção de Contacto -->
{{-- <section id="contact" class="contact section">
  <div class="container contact-wrapper">

    <!-- Suporte ao Cliente -->
    <div class="contact-support">
      <span class="contact-label">Apoio ao Cliente</span>
      <h2 class="contact-title">Ficou com <br><strong>alguma dúvida?</strong></h2>
      <p class="contact-description">Estamos aqui para esclarecer tudo para você!</p>
      <a href="#" class="contact-btn contact-btn-primary">Tire todas as suas dúvidas</a>
    </div>

    <!-- Bate-papo + FAQ -->
    <div class="contact-chatfaq">

      <!-- Bate-papo -->
      <div class="contact-chatbox">
        <div class="contact-chatcontent">
          <div class="contact-chatimage">
            <img src="https://i.imgur.com/LP9Chrb.png" alt="Atendente com notebook">
          </div>
          <div class="contact-chattext">
            <span class="contact-chatlabel">Bate-papo</span>
            <h3 class="contact-chattitle">Vamos falar sobre o seu próximo projeto.</h3>
            <p class="contact-chatdesc">
              Estamos aqui para ouvir sobre o seu próximo projeto. Queremos conhecer suas ideias, entender suas necessidades e colaborar para transformar sua visão em realidade.
            </p>
            <a href="#" class="contact-btn contact-btn-secondary">Bora começar</a>
          </div>
        </div>
      </div>

      <!-- FAQ -->
      <div class="faq-contact">
        <div class="faq-contact-item">
          <button class="faq-contact-toggle">▼</button>
          <div class="faq-contact-text">
            <h4>Qual plano da Tchitunda é ideal para o meu negócio?</h4>
            <p>A Tchitunda oferece planos personalizados de acordo com as necessidades do seu negócio...</p>
          </div>
        </div>
        <div class="faq-contact-item">
          <button class="faq-contact-toggle">▼</button>
          <div class="faq-contact-text">
            <h4>Como a Tchitunda gerencia redes sociais?</h4>
          </div>
        </div>
        <div class="faq-contact-item">
          <button class="faq-contact-toggle">▼</button>
          <div class="faq-contact-text">
            <h4>Como a Tchitunda otimiza landing pages para conversões?</h4>
          </div>
        </div>
        <div class="faq-contact-item">
          <button class="faq-contact-toggle">▼</button>
          <div class="faq-contact-text">
            <h4>Qual assinatura da Tchitunda atende melhor à minha empresa?</h4>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
 --}}
<!-- /Seção de Contacto -->


</main>

@endsection
