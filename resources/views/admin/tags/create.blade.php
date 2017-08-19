@extends('admin.template.main')

@section('title','Agregar Tag')

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

{!! Form::open(['route'=>'admin.tags.store','method'=>'POST']) !!}


<div class="row">    
    <div class="form-group col-md-10">
      {{ Form::label('name', 'Nombre') }}
      {{ Form::text('name', null, array('placeholder' => 'Introduce el nombre del Tag', 'class' => 'form-control')) }}        
    </div>   
  </div>
  {{ Form::button('Crear Tag', array('type' => 'submit' ,'class' => 'btn btn-primary')) }}    
  
{!! Form::close() !!}

@endsection