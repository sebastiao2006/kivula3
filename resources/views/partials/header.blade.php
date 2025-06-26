<header class="custom-header">
  <div class="header-container">
<!-- LOGO -->
    <a href="index.html" class="logo">
      <h1>
        <img src="{{ asset('assets/img/logo1.png') }}" alt="T" class="logo-img">
        <span>Kivula</span>
      </h1>
    </a>


    <!-- NAVIGATION -->
    <nav class="nav-menu">
      <ul class="nav-links">
        <li><a href="{{ route('site.home.index') }}">Home</a></li>
        <li><a href="{{ route('site.about.index') }}">Sobre</a></li>
        <li><a href="#portfolio">Nossos Trabalhos</a></li>
        <li><a href="#services">Soluções</a></li>
        <li><a href="#plans">Planos</a></li>

        <!-- DROPDOWN -->
        <li class="dropdown">
          <a href="#">Produtos</a>
          <ul class="dropdown-content">
            <li><a href="{{ route('product.show', ['id' => 1]) }}">Landing Page</a></li>
            <li><a href="{{ route('product.show', ['id' => 2]) }}">Portfolio</a></li>
            <li><a href="{{ route('product.show', ['id' => 3]) }}">SGE</a></li>
          </ul>
        </li>
      </ul>

      <!-- CTA BUTTON -->
      <a href="#contact" class="btn-contact">Contato</a>
    </nav>
  </div>
</header>



     <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ route("site.home.index") }}">Home</a></li>
        <li><a href="#about">Sobre</a></li>
        <li><a href="#portfolio">Nossos Trabalhos</a></li>
        <li><a href="#services">Soluções</a></li>
        <li><a href="#plans">Planos</a></li>
        <li class="dropdown">
          <a href="#"><span>Produtos</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="{{ route('product.show', ['id' => 1]) }}">Landing Page</a></li>
            <li><a href="{{ route('product.show', ['id' => 2]) }}">Portfolio</a></li>
            <li><a href="{{ route('product.show', ['id' => 3]) }}">SGE</a></li>
          </ul>
        </li>
        <li><a href="#contact" class="btn-contact">Contato</a></li>
      </ul>
      <i class="mobile-nav-toggle bi bi-list"></i>
    </nav> 
