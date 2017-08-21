<div class="panel panel-primary">
    <div class="panel-heading">
        <h1 class="panel-title">Categorias</h1>
    </div>

    <div class="panel-body">
        <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">
                    <span class="badge">{{$category->articles->count()}}</span>
                    <a href="{{ route('front.search.category',$category->name) }}" class="">
                        {{$category->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="panel panel-info">
    <div class="panel-heading">
        <h1 class="panel-title">Novedades</h1>
    </div>
    <div class="panel-body">
        <span>
            Las ultimas noticias frescas sobre Porgramación y avances
        </span>

    </div>
</div>