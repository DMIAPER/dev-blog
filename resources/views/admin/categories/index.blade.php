@extends('admin.template.main')

@section('title','Lista de Categorias')

@section('content')


 @if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
     <p>{{ $message }}</p>
        </div>
    @endif

<a href="{{route('admin.categories.create')}}" class="btn btn-success">Nueva Categoria</a><hr>   

<table class="table table-striped">
	
	<thead>
	<th>ID</th>
	<th>Nombre</th>	
	<th>Acción</th>
	</thead>
	<tbody>
		@foreach($categories as $category)
		<tr>
			<td>{{$category->id}}</td>
			<td>{{$category->name}}</td>
			<td>
				<a href="{{route('admin.categories.destroy',$category->id)}}"
				 onclick="return confirm('¿Seguro que desea eliminar esta categoria?')"
				 class="btn btn-danger">
					<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
				</a>
			    <a href="{{route('admin.categories.edit',$category->id)}}" class="btn btn-warning">
			    	<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
			    </a>
		    </td>
		</tr>
		@endforeach
	</tbody>
</table>
{!! $categories->render() !!}
@endsection