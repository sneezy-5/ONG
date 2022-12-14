@extends('base.qsnapp')

@section('qsn')


 <!--CENTER-->

 <div class="center row">


<div class="card m-4 border-0" style="max-width: 900px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('styles/img/logo.jpeg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title text-dark fst-italic h2" style="font-weight:700;">Qui sommes nous ? </h5>
        <p class="card-text">
          L'<span class="text-danger fw-bold" style="color:#fff;">ONG SOURIRE D'AFRIQUE</span> crée le 08 septembre 2022 à Taabo par son président Monsieur Richard GABDIBE résidant aux États-Unis fils et cadre de Taabo-Village à pour mission de venir en aide aux 
          personnes vulnérables notamment : les veuves, les orphelins,les malades, les handicapés... <br> <br>

          L'ONG sourire d'Afrique est aussi en charge d' accompagner les jeunes et les femmes dans leurs projets entrepreneuriales 
          Nous intervenons dans le social, la santé, l'éducation,  les activités socio-économiques, culturelles et sportives

        </p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<hr>

<a href="description.html" class="card mb-4" style="width: 40rem;text-decoration: none;">
  <h5 class="card-title text-dark  h2 m-0 mt-3" style="font-weight:700;">GADIBE RICHARD</h5>
  <footer class="blockquote-footer mt-1">Président de l'ONG <cite title="Source Title">Sourire d'Afrique</cite></footer>
  <img src="{{asset('styles/img/président.jpg')}}" class="card-img-top w-100" alt="...">


</a>

<hr>

</div>

<!--FIN CENTER-->

@endsection
