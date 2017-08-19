@extends('front.template.main')


@section('content')

   
 

<div class="row">
 
       <div class="col-md-9">
<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Ultimos Articulos</h3>
    </div>

    <div class="panel-body">
    <div class="row">     

      @foreach($articles as $article)

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
           <div class="col-md-4">
            <br>             
               <a href="{{ route('front.view.article',$article->slug)}}" class="thumbnail">

              @foreach($article->images as $image)
              <img src="{{asset('images/articles/' .$image->name)}}" alt="" class="img-responsitive img-article">
              @endforeach


            </a>

           </div>
           <div class="col-md-8">
             
             <h3 class="text-left ">{{$article->title}}</h3>
            
            <p>{{str_limit($article->content, $limit = 100, $end = '&nbsp;.&nbsp;.&nbsp;.')}}&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('front.view.article',$article->slug)}}" role="button" class="btn btn-primary btn-sm">Leer mas</a></p>
            <br><br><br>
            <i class="fa fa-folder-open-o"></i><a href="{{ route('front.search.category',$article->category->name) }}">&nbsp;&nbsp;
             
            {{$article->category->name}}</a>
            <div class="pull-right">              
  
              <i class="fa fa-clock-o">&nbsp;&nbsp;Publicado {{ $article->created_at->diffForHumans()}}</i>
            </div>
           </div>
            
          </div>
        </div>
      </div>
        @endforeach

    </div>
    {{ $articles->render() }}


  </div>
    </div>


 
</div>

  <div class="col-md-3 aside">
   @include('front.template.partials.aside')
  </div>
</div>

@endsection