@extends('layouts.admin')

@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Enregistrer une story
                  </h4>
                  <p class="card-description">
                   FOrmulaire de story
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleSelectGender">Type de story</label>
                        <select class="form-control" id="exampleSelectGender" name="type">
                          <option value="sport">Sport</option>
                          <option value="education">Education</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="image" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Nom de la mission</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="nom de la mission" name="mission_name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Date de la mission</label>
                      <input type="date" class="form-control" id="exampleInputCity1" name="mission_date">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Envoyer</button>
                    <button class="btn btn-light">Annuler</button>
                  </form>
                </div>
              </div>
            </div>

            @endsection