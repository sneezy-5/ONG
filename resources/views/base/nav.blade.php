<!---HEADER-->
<nav class="navbar navbar-expand-lg bg-light position-fixed w-100 headerpg" style="z-index:100">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="{{asset('styles/img/logo.jpeg')}}" alt="" height="50" width="50" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Qui sommes nous ?
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/aproposdenous">Qui sommes nous</a></li>
              <li><a class="dropdown-item" href="#">Contactez-Nous </a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nos Missions
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Social</a></li>
              <li><a class="dropdown-item" href="#">Santé</a></li>
              <li><a class="dropdown-item" href="#">Education</a></li>
              <li><a class="dropdown-item" href="#">Culture</a></li>
              <li><a class="dropdown-item" href="#">Sport</a></li>
              <li><a class="dropdown-item" href="#">Socio-économique</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nos Activités
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Nos activités</a></li>
              <li><a class="dropdown-item" href="#">Partager une Story</a></li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Comment Nous Aider
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Donner par mois</a></li>
              <li><a class="dropdown-item" href="{{route('adhesion.create')}}">Adhésion</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Faire un Don</a></li>
            </ul>
          </li>

          <button class="btn btn-danger navbar-btn m-1 " type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Faites un don</button>
          <button class="btn btn-primary m-1"><a class="dropdown-item" title="connectez-vous pour gerer votre don" href="{{route('login')}}">Connexion</a></button>
          

        </ul>
         @include('template.newsletter.create')
      </div>
    </div>
  </nav>

<!--- FIN HEADER-->