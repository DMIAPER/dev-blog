@extends('admin.template.main')

@section('title','Agregar Categoria')

@section('content')

    @if (count($errors) > 0)
<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Atención!</strong> Revise los errores del formulario.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

{!! Form::open(['route'=>'admin.categories.store','method'=>'POST','files'=>'true']) !!}


<div class="row">    
    <div class="form-group col-md-10">
      {{ Form::label('name', 'Nombre') }}
      {{ Form::text('name', null, array('placeholder' => 'Introduce el nombre de la categoria', 'class' => 'form-control')) }}        
    </div>  

    <div class="form-group col-md-10">
      {{ Form::label('descripcion', 'Descripcion') }}
     {{ Form::textarea('descripcion', null, ['class' => 'form-control textarea-content']) }}
    </div>  

    <div class="form-group col-md-10">
      {{ Form::label('image', 'Imagen') }}
      {{ Form::file('image',null) }}        
    </div> 
  </div>



  {{ Form::button('Crear Categoria', array('type' => 'submit' ,'class' => 'btn btn-primary')) }}    
  
{!! Form::close() !!}

@endsection