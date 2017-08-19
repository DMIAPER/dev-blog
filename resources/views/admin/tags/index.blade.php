@extends('admin.template.main')

@section('title','Lista de Tags')

@section('content')


 @if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
     <p>{{ $message }}</p>
        </div>
    @endif

<a href="{{route('admin.tags.create')}}" class="btn btn-success">Nuevo Tag</a>  


{{ Form::open(['route' => ['admin.tags.index'],
	'method' => 'GET',
	'class'=>"navbar-form navbar-left pull-right",
	'role'=>'search']) }}
    <div class="form-group">
       {{ Form::text('name', null, array('placeholder'=>'Buscar', 'class'=>'form-control')) }}
       <button type='submit' class="btn btn-default">Buscar</button>
   </div>
{{ Form::close() }}
<hr>
<table class="table table-striped">
	
	<thead>
	<th>ID</th>
	<th>Nombre</th>
	<th>Acción</th>
	</thead>
	<tbody>
		@foreach($tags as $tag)
		<tr>
			<td>{{$tag->id}}</td>
			<td>{{$tag->name}}</td>
			<td>
				<a href="{{route('admin.tags.destroy',$tag->id)}}"
				 onclick="return confirm('¿Seguro que desea eliminar este tag?')"
				 class="btn btn-danger">
					<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
				</a>
			    <a href="{{route('admin.tags.edit',$tag->id)}}" class="btn btn-warning">
			    	<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
			    </a>
		    </td>
		</tr>
		@endforeach
	</tbody>
</table>
{!! $tags->render() !!}
@endsection