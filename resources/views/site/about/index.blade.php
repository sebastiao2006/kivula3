@extends('layouts.app')
@section('title', 'Kivula')
@section('content')
<div class="container">
    <img src="assets/img/logo/logo4.png" class="logo1" alt="">
    <h1>Sobre a Kivula Solutions </h1>
    <p>A KivulaTech é uma empresa do <span class="highlight">Grupo Intellectus - Formação e Gestão Lda</span>, que oferece uma 
    variedade de serviços, bem como Sistemas e Tecnologias de Informação, especializada em 
    projectos de Transformação Digital nas mais diversas indústrias.</p>
</div>

<section>
    <div class="wrapper">
        
        <h1>Nosso propósito</h1>
        <p>Levamos muito a sério os princípios que guiam as nossas acções</p>
        
        <div class="cards">
            <div class="card">
                <img src="assets/img/icon/missao.png"  alt="Missão">
                <h2>Missão</h2>
                <p>Capacitar indivíduos e organizações a prosperar na era digital, fornecendo soluções inovadoras de tecnologia e multimédia.</p>
            </div>
            <div class="card">
               <img src="assets/img/icon/visao.png"  alt="Visão">
                <h2>Visão</h2>
                <p>Nossa visão é ser uma referência global na transformação digital, reconhecida pela excelência em tecnologia e multimédia.</p>
            </div>
            <div class="card">
                <img src="assets/img/icon/diamante.png"  alt="Valores">
                <h2>Valores</h2>
                <p>Inovação Constante, Excelência e Qualidade, Integridade e Transparência, Colaboração e Trabalho em Equipa, Foco no Cliente.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="partners-section">
        <h1 class="partners-title">Nossos parceiros</h1>
        <p class="partners-subtitle">Confiável por empresas de rápido crescimento em Angola</p>
        <div class="partners-logos">
            <img src="assets/img/logo/logo1.png"  alt="" class="partner-logo">
            <img src="assets/img/logo/logo2.png"  alt="" class="partner-logo">
            <img src="assets/img/logo/logo3.png"  alt="" class="partner-logo">
            <img src="assets/img/logo/diamante.png"  alt="" class="partner-logo">
            <img src="assets/img/logo/diamante.png"  alt="" class="partner-logo">
            <img src="assets/img/logo/diamante.png"  alt="" class="partner-logo">
           
        </div>
    </div>
</section>

<style>

.container {
            padding: 50px;
        }
        .logo1 {
           
            margin-left: 400px;
        }
        h1 {
            font-size: 32px;
            color: #0c1324;
        }
        p {
            font-size: 18px;
            color: #333;
        }
        .highlight {
            color: #008f7a;
            font-weight: bold;
        }

        .wrapper {
            padding: 50px;
        }
        .brand-logo {
            max-width: 300px;
        }
        h1 {
            font-size: 32px;
            color: #0c1324;
            text-align: center;
        }
        p {
            font-size: 18px;
            color: #333;
            text-align: center;
        }
        .text-highlight {
            color: #008f7a;
            font-weight: bold;
        }
        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        .card {
            background-color: #eef8f9;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }
        .card h2 {
            font-size: 22px;
            color: #0c1324;
        }
        .card p {
            font-size: 16px;
            color: #333;
            text-align: center;
        }

        .partners-section {
            margin-top: 50px;
            padding: 50px 20px;
            background-color: #f8f9fa;
        }
        .partners-title {
            font-size: 32px;
            color: #0c1324;
            margin-bottom: 10px;
        }
        .partners-subtitle {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }
        .partners-logos {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }
        .partner-logo {
            max-width: 150px;
        }
        

</style>
@endsection