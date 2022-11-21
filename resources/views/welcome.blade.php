<!--  -->

@extends('base.app')

@section('content')

<div class="container">
  
  

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

    <!--CENTER-->

 <div class="center row">

   <div class="parentbloc0">
          
     <div class="card-text w-100 m-2 container-fluid d-flex justify-content-center align-items-center flex-column"  style="text-align:center;">
       <h1 class="card-title text-light fst-italic mb-4 mt-5" style="font-weight:700;">Le grand Titre du Centre</h1>
       <p class="w-75 text-muted h5 mb-5">le contenue Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ex cupiditate quaerat veritatis illo aliquam dignissimos at, sapiente nostrum, voluptatibus beatae t</p>
     </div>

   </div>

   <div class="parentbloc1 row">


     <div class="card m-3 mb-3 mt-3 " style="width:18rem;">
       <img src="{{asset('styles/img/1.jpg')}}" alt="" class="card-img-top">
       <div class="card-body">
         <h5 class="card-title text-dark fst-italic h3" style="font-weight:700;">Soutenez les plus défavorisés</h5>
         <a href="{{ route('faireundon.create')}}" class="btn btn-primary">Faites un don</a>
       </div>
     </div>

     <div class="card m-3 mb-3 mt-3" style="width:18rem;">
       <img src="{{asset('styles/img/2.jpg')}}" alt="" class="card-img-top">
       <div class="card-body">
         <h5 class="card-title text-dark fst-italic h3" style="font-weight:700;">Soutenez les plus défavorisés</h5>
         <a href="{{ route('faireundon.create')}}" class="btn btn-primary">Faites un don</a>
       </div>
     </div>

     <div class="card m-3 mb-3 mt-3" style="width:18rem;">
       <img src="{{asset('styles/img/3.jpg')}}" alt="" class="card-img-top">
       <div class="card-body">
         <h5 class="card-title text-dark fst-italic h3" style="font-weight:700;">Soutenez les plus défavorisés</h5>
         <a href="{{ route('faireundon.create')}}" class="btn btn-primary">Faites un don</a>
       </div>
     </div>

   </div>

   <div class="parentbloc2 row container-fluid d-flex justify-content-center align-items-center">


       <div class="bloc-info m-5">

         <div class="titreinfo container-fluid align-items-center card-body" style="text-align:start;">
         <h3 class="title text-light fst-italic"  style="font-weight:700;">
             L'AIDE HUMANITAIRE DE L'ONG SOURIRE D'AFRIQUE POUR LES ENFANTS <br>
           <a href="#" class="h5">LISEZ NOS HISTOIRES »</a>
         </h3>
        </div>

        <div class="card w-100">
         <img class="card-img-top" src="{{asset('styles/img/3.jpg')}}" alt="Card image">
         <div class="card-body">
           <h1 class="card-title text-dark fst-italic mb-2" style="font-weight:700;">Le grand Titre du Centre</h1>
           <p class="card-text">
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos officia quasi harum mollitia. Molestiae vel, possimus rem magnam, placeat vero, adipisci officiis numquam in hic omnis facere repellat reiciendis iure.
           </p>
           <a href="#" class="btn btn-primary">Lire la suite</a>
         </div>
       </div>


          <div class="row d-flex justify-content-center align-items-center m-3">

           <div class="card-body col-md-3  m-1">
             <img src="{{asset('styles/img/imgbanner.jpg')}}" class="card-img-top img-fluid" alt="des fillettes">
             <h4 class="card-title text-light h5">observer les enfants de rue</h4>
           </div>

           <div class="card-body col-md-3  m-1">
             <img src="{{asset('styles/img/imgbanner.jpg')}}" class="card-img-top img-fluid" alt="des fillettes">
             <h4 class="card-title text-light h5">observer les enfants de rue</h4>
           </div>

           <div class="card-body col-md-3 m-1">
             <img src="{{asset('styles/img/imgbanner.jpg')}}" class="card-img-top img-fluid" alt="des fillettes">
             <h4 class=" card-title text-light h5">observer les enfants de rue</h4>
           </div>

          </div>

       </div>

   </div>

   <div class="parentbloc3 row d-flex justify-content-center align-items-center">

     <div class="card-text w-100 m-2 container-fluid d-flex justify-content-center align-items-center flex-column"  style="text-align:center;">
       <h1 class="card-title text-light fst-italic mb-4 mt-5" style="font-weight:700;">Le grand Titre du Centre</h1>
       <p class="w-75 text-muted h5 mb-5">le contenue Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ex cupiditate quaerat veritatis illo aliquam dignissimos at, sapiente nostrum, voluptatibus beatae t</p>
     </div>

     <div class="vr"></div>

     <div class="row mb-5 infosocial d-flex justify-content-center">

          <div class="col-md container-fluid blocsocial">
           <h1 class="card-title text-light fst-italic mb-4 mt-5 h3" style="font-weight:700;">Participer avec nous</h1>
           <p class="text-light">
           recevez des informations sur nos actions et activités en remplissant la newsletter
           </p>

           <form action="Accueil.html" class="formcenter ">
             <div class="form-group d-flex flex-column flex-sm-row gap-2">
               <input type="email"  class="form-control newslettercenter" placeholder="Newletter">
               <input type="submit" value="Envoyer" class="btn btn-success ml "></input>
              </div>
           </form>

           <div class="mt-5">
             <a class="btn btn-primary btn-lg" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>

             <a class="btn btn-primary btn-lg" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
           </div>

         </div>
          <div class="col-md container-fluid">
          <iframe class="container-fluid col-md" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fprofile.php%3Fid%3D100086654464545&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
         </div>
     </div>

   </div>

 </div>

<!--FIN CENTER-->
@endsection