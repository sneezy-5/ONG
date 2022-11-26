@include('base.app')

@include('base.nav')



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
                <p class="card-text">rnatur temporibus? Dolor officiis hic natus unde, saepe accusamus consequuntur
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore sed dignissimos alias itaque maiore
                </p>
              </div>
            </div>

            <div class="card m-2 mb-5 d-flex justify-content-between" style="width:20rem;">

              <!-- Nav pills -->
              <ul class="nav nav-pills bg-light justify-content-between">
                <li class="nav-item w-50 justify-content-center">
                  <a class="nav-link active " data-bs-toggle="pill" href="#home">Donner une fois</a>
                </li>
                <li class="nav-item w-50 ">
                  <a class="nav-link text-align-center" data-bs-toggle="pill" href="#menu1">mensuel</a>
                </li>

              </ul>

              <!-- Tab panes -->
              <div class="tab-content justify-content-center align-items-center h-100">
                <div class="tab-pane card nav nav-pills active montant" id="home">

                  <div class="btn btn-light m-1 active btnprix" data-bs-toggle="pill">5000fr</div>
                  <div class="btn btn-light m-1 btnprix" data-bs-toggle="pill">10000fr</div>
                  <div class="btn btn-light m-1 btnprix" data-bs-toggle="pill">15000fr</div>
                  <div class="btn btn-light m-1 btnprix" data-bs-toggle="pill">20000fr</div>
                  <div class="btn btn-light m-1 btnprix" data-bs-toggle="pill">25000fr</div>
                  <div class="btn btn-light m-1 btnprix" data-bs-toggle="pill">25000fr</div>

                  <form action="{{route('faireundon.store')}}"method="post" class="mt-5 m-1 justify-content-between formprixmodal">
                    @csrf
                    <div class="input-group mb-3">
                      <span class="input-group-text">F CFA</span>
                      <input type="number" class="form-control caseprix"
                        aria-label="Dollar amount (with dot and two decimal places)" name="amount" value="5000">

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
                        <input class="form-check-input btncoche" type="checkbox" id="flexCheckDefault"
                          data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                          aria-controls="collapseExample">
                        <label class="form-check-label" for="flexCheckDefault">
                          Donner en l'honneur ou en mémoire
                        </label>
                      </div>

                      </p>
                      <div class="collapse" id="collapseExample">
                        <div class="form-group">
                          <input type="text" class="form-control specialchamp"
                            placeholder="nom de quelqu'un de spécial">
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


                <div class="tab-pane container fade" id="menu1">

                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="">
                      <div class="card rounded-3">
                        <img src="{{asset('styles/img/3.jpg')}}" class="w-100"
                          style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                        <div class="card-body ">
                          <h3>Inscrivez-Vous</h3>
                          <small class="m-0 p-0">pour faire un don mensuel</small>

                          <form action="{{route('register')}}" method="post" class="px-md-2 mt-2 forminscrimodal">
                            @csrf
                            <div class="form-outline mb-1">
                              <label class="form-label" for="nom">Nom & prénoms</label>
                              <input type="text" id="nom" class="form-control iptinscript" />

                              <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Veuillez Entrez votre nom et prénoms.
                              </div>
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                            </div>

                            <div class="form-outline mb-1">
                              <label class="form-label" for="mail">email</label>
                              <input type="email" id="mail" class="form-control iptinscript" />

                              <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Veuillez Entrez votre mail.
                              </div>
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                            </div>

                            <div class="form-outline mb-1">
                              <label class="form-label" for="chiffre">Combien Souhaitez-vous donner par mois ?</label>
                              <input type="number" id="chiffre" class="form-control" value="10000" />

                              <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Entrez un montant superieur à 10.000fr
                              </div>
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                            </div>

                            <div class="form-outline mb-1">
                              <label class="form-label" for="pass">Entrez un mot de passe</label>
                              <input type="password" id="pass" class="form-control iptinscript" />

                              <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Veuillez Entrez un mot de passe
                              </div>
                              <div class="valid-feedback">
                                Looks good!
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

    @yield('login')


    @include('base.footer')