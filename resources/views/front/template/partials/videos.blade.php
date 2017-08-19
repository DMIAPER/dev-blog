@extends('front.template.main')

@section('content') 

<div class="row">
 
       <div class="col-md-12">
        <div class="panel panel-primary">
         <div class="panel-heading">
          <h3 class="panel-title">Videos</h3>
        </div>

          <div class="panel-body">
          <div class="row">     
              @foreach($articles as $article)
              <div class="col-md-12">
                <h3 class="title-front left"><b>{{ $article->title }}</b></h3>
                <div class="row">
                 <div class="col-md-10 content">
    
                {{ $article->content }}
                    <br><br>

                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="640" height="480" src="https://www.youtube.com/embed/{{$article->idVideo}}" frameborder="0" allowfullscreen></iframe>                
                </div>
                <hr>
       
               </div>
      </div>     
      </div>
       @endforeach

    </div>
    </div> 
</div>
</div>
</div>
@endsection