@extends('admin.template.main')

@section('title','Lista de Artículos')

@section('content')


 @if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
     <p>{{ $message }}</p>
        </div>
    @endif

<a href="{{route('admin.articles.create')}}" class="btn btn-success">Nuevo Artículo</a>

{{ Form::open(['route' => ['admin.articles.index'],
	'method' => 'GET',
	'class'=>"navbar-form navbar-left pull-right",
	'role'=>'search']) }}
    <div class="form-group">
       {{ Form::text('title', null, array('placeholder'=>'Buscar', 'class'=>'form-control')) }}
       <button type='submit' class="btn btn-default">Buscar</button>
   </div>
{{ Form::close() }}

<hr>

<table class="table table-striped">
	
	<thead>
	<th>ID</th>
	<th>Titulo</th>
	<th>Categoria</th>
	<th>Id Video</th>
	<th>Users</th>
	<th>Acción</th>
	</thead>
	<tbody>
		@foreach($articles as $article)
		<tr>
			<td>{{$article->id}}</td>
			<td>{{$article->title}}</td>
			<td>{{$article->category->name}}</td>
			<td>{{$article->idVideo}}</td>
			<td>{{$article->user->name}}</td>
			
			<td>
				<a href="{{route('admin.articles.destroy',$article->id)}}"
				 onclick="return confirm('¿Seguro que desea eliminar este registro?')"
				 class="btn btn-danger">
					<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
				</a>
			    <a href="{{route('admin.articles.edit',$article->id)}}" class="btn btn-warning">
			    	<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
			    </a>
		    </td>
		</tr>
		@endforeach
	</tbody>
</table>
{!! $articles->render() !!}

@endsection