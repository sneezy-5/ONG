@extends('layouts.admin')

@section('content')

<div class="col-12 grid-margin stretch-card ">
        
    
              <div class="card-body">
                <div class="tab-content">
                 
                
                <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                          <p>{{$story->type}}</p>
                        </div>
                      </div>

                  <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Titre</label>
                        <div class="col-sm-10">
                          <p>{{$story->title}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <p>{{$story->description}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Nom de la mission</label>
                        <div class="col-sm-10">
                          <p>{{$story->mission_name}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">date de la mission</label>
                        <div class="col-sm-10">
                          <p>{{$story->mission_date}}</p>
                        </div>
                      </div>
                      
                      <div class="tab-pane active" id="settings">
                      @foreach(json_decode($story->image,true) as $image)

                      <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Image</label>

                        <div class="col-sm-10" >
                          <p><img src="{{asset('storage/image/'.$image)}}" alt="" style="width:600px; height:400px;"></p>
        
                      </div>
                    
                      </div>
                      
                      @endforeach
                  </div>

                  <div class="tab-pane active" id="settings">
                      @foreach(json_decode($story->video,true) as $video)

                      <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Vidéo</label>

                        <div class="col-sm-10" >
                        @if($video=="novideo.jpg")
                            <p>{{$video}}</p>
                            @else
                          <p>  <video width="500px" height="500px"
                            controls="controls"/>
                      
                           
                            <source src="{{asset('storage/vidéo/'.$video)}}" type="video/mp4">
                           
                         
                    </video>
                  </p>
                  @endif
                      </div>
                    
                      </div>
                      
                      @endforeach
                  </div>

                   <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
       
          <!-- /.col -->
        </div>
@endsection