<header id="header" class="fixed-top header-inner-pages bg-warning">
    <div class="container d-flex align-items-center">
        <img src="{{ asset('dist/img/upb.png') }}" alt="UPB logo" width="30" height="40">
      <h1 class="logo me-auto"><a href="#">UPB - Internat</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar ">
        <ul>
          <li><a class=" " href="#hero">Accueil</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Infos</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipe</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="" href="{{ route('login') }}"wire:navigate>Se connecter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
      <!-- Page Heading -->
      @if (isset($header))
      <header class="bg-white shadow">
          <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
              {{ $header }}
          </div>
      </header>
  @endif

</header>
