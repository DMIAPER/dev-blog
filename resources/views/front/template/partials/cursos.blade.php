@extends('front.template.main')

@section('content') 

<div class="row">
 
       <div class="col-md-12">
        <div class="panel panel-primary">
         <div class="panel-heading">
          <h3 class="panel-title">Cursos</h3>
        </div>

          <div class="panel-body">
          <div class="row">     
              @foreach($categories as $category)
          

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
           <div class="col-md-7">
            <br>             
              <a href="{{ route('front.search.category',$category->name) }}">
              <img src="{{asset('images/articles/' .$category->image)}}" alt="" width="100%" height="100%" class="img-responsitive img-article">
          
           </div>       

           <div class="col-md-4">
               <h3>{{$category->name}}</h3>  </a>
               <br><br>
               <p>{{$category->descripcion}}</p>
           </div>


          </div>
        </div>
      </div>
      @endforeach

      </div>
    </div>
          </div>
    </div>
          </div>
    </div>



@endsection