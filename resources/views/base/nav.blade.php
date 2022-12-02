 <!---HEADER-->
 <nav class="navbar navbar-expand-lg bg-light position-fixed w-100 headerpg" style="z-index:100">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('/')}}"><img src="{{asset('styles/img/logo.jpeg')}}" alt="" height="50" width="50" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('/')}}">Home</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Qui sommes nous ?
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/aproposdenous">Qui sommes nous</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Contactez-Nous </a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nos Missions
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="nosmissions/sociales">Social</a></li>
              <li><a class="dropdown-item" href="nosmissions/santes">Santé</a></li>
              <li><a class="dropdown-item" href="nosmissions/educations">Education</a></li>
              <li><a class="dropdown-item" href="nosmissions/cultures">Culture</a></li>
              <li><a class="dropdown-item" href="nosmissions/sports">Sport</a></li>
              <li><a class="dropdown-item" href="nosmissions/economies">Socio-économique</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nos Activités
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('story.index')}}">Nos activités</a></li>
              <li><a class="dropdown-item" href="">Partager une Story</a></li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Comment Nous Aider
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Donner par mois</a></li>
              <li><a class="dropdown-item" href="{{route('adhesion.create')}}">Adhésion</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Faire un
                  Don</a></li>
            </ul>
          </li>

          <button class="btn btn-danger navbar-btn m-1 " type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Faites un don</button>
          @guest
          <button class="btn btn-primary m-1"><a class="dropdown-item" href="{{route('login')}}">Connexion</a></button>
          @endguest

          @auth
          <button class="btn btn-primary m-1"><a class="dropdown-item" href="{{route('dashboard')}}">Espace donateur</a></button>
          @endauth

        </ul>
        <form action="{{route('newsletter.store')}}" method="POST" class="d-flex formheader">
            @csrf
            <input class="form-control me-2 newsletterheader" name="email" type="email" placeholder="New letter">
            <button class="btn btn-outline-success" type="submit">Envoyer</button>
            @include('base.errors')

            @if(Session::has('success'))
              <div class="alert alert-success" style="text-align:center;height:auto; width:auto; font-size:15px">
              {{Session::get('success')}}
              </div>
            @endif
        </form>
      </div>
        
       
    </div>
  </nav>

  <!--- FIN HEADER-->

  <div class="container">
  
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <img src="{{asset('styles/img/logo.jpeg')}}" class="img-container" alt="" width="70" height="70">
       <h1 class="modal-title fs-5" id="exampleModalLabel">Faites un don </h1>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body row container-fluid justify-content-center  m-0">
     
       <div class="card m-2 mb-5 " style="width:25rem;">
         <img src="{{asset('styles/img/imgbanner.jpg')}}" alt="" class="card-img-top">
         <div class="card-body">
           <h5 class="card-title">Title</h5>
           <p class="card-text">rnatur temporibus? Dolor officiis hic natus unde, saepe accusamus consequuntur Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore sed dignissimos alias itaque maiore</p>
         </div>
       </div>

       <div class="card m-2 mb-5 d-flex justify-content-between" style="width:20rem;">

       <!-- Nav pills -->
       <ul class="nav nav-pills bg-light justify-content-between">
         <li class="nav-item w-50 justify-content-center">
           <a class="nav-link active " data-bs-toggle="pill" href="#home">Donner une fois</a>
         </li>
        @guest
          <li class="nav-item w-50 ">
            <a class="nav-link text-align-center" data-bs-toggle="pill" href="#menu1">mensuel</a>
          </li>
        @endguest
       </ul>

<!-- Tab panes -->
<div class="tab-content justify-content-center align-items-center h-100">
 <div class="tab-pane card nav nav-pills active montant" id="home">

<div  class="btn btn-light m-1 active btnprix" data-bs-toggle="pill">5000fr</div>
<div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">10000fr</div>
<div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">15000fr</div>
<div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">20000fr</div>
<div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">25000fr</div>
<div  class="btn btn-light m-1 btnprix" data-bs-toggle="pill">25000fr</div> 



   <form action="{{route('faireundon.store')}}" method="POST" class="mt-5 m-1 justify-content-between formprixmodal">
     @csrf
     <div class="input-group mb-3">
       <span class="input-group-text">F CFA</span>
       <input type="number" class="form-control caseprix" aria-label="Dollar amount (with dot and two decimal places)" value="5000">
       
       <div id="validationServerUsernameFeedback" class="invalid-feedback" style="text-align:start;">
         Entrez un montant superieur à 10.000fr
       </div>
       <div class="valid-feedback" style="text-align:start;">
         Looks good!
       </div>
     </div>

    <div>

     <p>
       <div class="form-check d-flex gap-2">
         <input class="form-check-input btncoche" type="checkbox"  id="flexCheckDefault" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" >
         <label class="form-check-label" for="flexCheckDefault">
           Donner en l'honneur ou en mémoire 
         </label>
       </div>

     </p>
     <div class="collapse" id="collapseExample">
       <div class="form-group">
        <input type="text" class="form-control specialchamp" placeholder="nom de quelqu'un de spécial">
       </div>
     </div>

    </div>

     <input type="submit" value="faire un don" class="btn btn-primary w-100 mt-5">
   </form>
   @include('base.errors')

  @if(Session::has('success'))
    <div class="alert alert-success" style="text-align:center;height:auto; width:auto; font-size:15px">
    {{Session::get('success')}}
    </div>
  @endif
 </div>


 @guest
 <div class="tab-pane container fade" id="menu1">

<div class="row d-flex justify-content-center align-items-center h-100">
  <div class="">
    <div class="card rounded-3">
      <img src="{{asset('styles/img/3.jpg')}}"
        class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
        alt="Sample photo">
      <div class="card-body ">
        <h3>Inscrivez-Vous</h3>
         <small class="m-0 p-0">pour faire un don mensuel</small>

         

        <form action="" method="POST" class="px-md-2 mt-2 forminscrimodal">
          @csrf
          <div class="form-outline mb-1">
            <label class="form-label" for="nom">Nom & prénoms</label>
            <input type="text" id="nom" class="form-control iptinscript"/>

            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              Veuillez Entrez votre nom et prénoms.
            </div>
            <div class="valid-feedback">
              Très bien
            </div>
          </div>

          <div class="form-outline mb-1">
            <label class="form-label" for="mail">email</label>
            <input type="email" id="mail" class="form-control iptinscript"/>

            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              Veuillez Entrez votre mail.
            </div>
            <div class="valid-feedback">
              Très bien
            </div>
          </div>

          <div class="form-outline mb-1">
            <label class="form-label" for="chiffre">Combien Souhaitez-vous donner par mois ?</label>
            <input type="number" id="chiffre" class="form-control" value="10000"/>

            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              Entrez un montant superieur à 10.000fr
            </div>
            <div class="valid-feedback">
              Très bien
            </div>
          </div>

          <div class="form-outline mb-1">
            <label class="form-label" for="pass">Entrez un mot de passe</label>
            <input type="password" id="pass" class="form-control iptinscript"/>

            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              Veuillez Entrez un mot de passe
            </div>
            <div class="valid-feedback">
              Très bien
            </div>
          </div>

          <button type="submit" class="btn btn-success mb-1">Envoyer</button>

        </form>
        @include('base.errors')

        @if(Session::has('success'))
          <div class="alert alert-success" style="text-align:center;height:auto; width:auto; font-size:15px">
          {{Session::get('success')}}
          </div>
        @endif
      </div>
    </div>
  </div>
</div>

</div>
 @endguest
</div>

</div>

     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
     </div>
   </div>
 </div>
</div>
   <!--fin modal-->