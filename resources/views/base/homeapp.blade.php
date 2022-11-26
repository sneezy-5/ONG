@include('base.app')
<body>


@include('base.nav')
   

     <!---BANNER-->

     <div id="carouselExampleControls" class="carousel slide w-100" data-bs-ride="carousel">


      <div class="carousel-inner">

        <div class="card-body container-fluid  w-50 m-5" style="z-index:2; position: absolute;top:20%; left: 10%;">
          <h1 class="card-title text-light fst-italic" style="font-weight:700;">SAUVONS ENSEMBLE<br><span class="text-danger">LES PLUS DEMUNIS</span></h1>
           <h3 class="text-light mt-3 w-75">
            L'ONG SOURIRE D'AFRIQUE, notre priorité: apporter le sourire, l'amour et la joie dans les coeurs. 
           </h3>
           <button class="card-btn btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal"> Faites un Don</button>
        </div>

        <div class="carousel-item container-fluid active">
          <div class="d-block w-100 img" ></div>
        </div>
        <div class="carousel-item container-fluid">
          <div class="d-block w-100 img" ></div>
        </div>
        <div class="carousel-item container-fluid">
          <div class="d-block w-100 img" ></div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
     <!---FIN BANNER-->

     @yield('home')

    
   @include('base.footer')