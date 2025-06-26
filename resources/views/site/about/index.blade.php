@extends('layouts.app')
@section('title', 'Kivula')
@section('content')


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
      <span class="trajectory-label">Nossa trajetória</span>
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
    color: #7a1de6;
    margin-bottom: 10px;
    border-left: 4px solid #7a1de6;
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





@endsection