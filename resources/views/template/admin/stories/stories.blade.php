@extends('layouts.admin')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Stories</h4>
                  <p class="card-description">
                    <code>Stories</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Type
                          </th>
                          <th>
                            Titre
                          </th>
                          <th>
                            description
                          </th>
                          <th>
                            Nom de la mission
                          </th>
                          <th>
                            date de la mission
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($stories as $story)
                        <tr>
                          <td class="py-1">
                          {{ $story->type }}
                          </td>
                          <td>
                            {{$story->title}}
                          </td>
                          <td>
                          {{$story->description}}
                          </td>
                          <td>
                          {{$story->mission_name}}
                          </td>
                          <td>
                          {{$story->mission_date }}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        
            @endsection