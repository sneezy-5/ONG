@extends('base.app')


<section class="w-100 blocconnexion p-3 h-100 gradient-form mt-5">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-6">
              <h1>Le Titre</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates fuga repudiandae minima iusto
                natus ipsum,</p>
              <img src="img/imgbanner.jpg" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form method="POST" action="{{ route('login') }}" class="formconnex">
                @csrf
                <div
                  class="card-body row d-flex container-fluid flex-sm-row w-100 gap-2  align-items-center justify-content-center justify-content-lg-start">
                  <div class="card-title text-dark h2 mb-0  col-md" style="font-weight:700;">Connectez-vous</div>



                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email</label>
                    <input type="email" id="form3Example3" class="form-control form-control-lg champ" placeholder="Entrer votre email" />

                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                      Veuillez Entrez un mot de passe
                    </div>
                    <div class="valid-feedback">
                      Très bien
                    </div>

                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Mot de passe</label>
                    <input type="password" id="form3Example4" class="form-control form-control-lg champ"
                      placeholder="Entrer votre mot passe" />

                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                      Veuillez Entrez un mot de passe
                    </div>
                    <div class="valid-feedback">
                      Très bien
                    </div>

                  </div>

                  <div class="d-flex justify-content-between align-items-center">

                    <a href="#!" class="text-body">Mot de pass oublier ?</a>
                  </div>

                  <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-lg"
                      style="padding-left: 2.5rem; padding-right: 2.5rem;">Connexion
                    </button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Vous n'avez pas de compte ? <a href="#!"
                        class="link-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Inscriver-vous</a></p>
                  </div>

              </form>
            </div>
          </div>
        </div>

      </section>