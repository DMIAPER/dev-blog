@extends('admin.template.main')

@section('title','Crear Usuario')

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

{!! Form::open(['route'=>'admin.users.store','method'=>'POST']) !!}


<div class="row">    
    <div class="form-group col-md-10">
      {{ Form::label('name', 'Nombre') }}
      {{ Form::text('name', null, array('placeholder' => 'Introduce tu nombre', 'class' => 'form-control')) }}        
    </div>
    <div class="form-group col-md-10">
      {{ Form::label('email', 'Correo Electrónico') }}
      {{ Form::text('email', null, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-10">
      {{ Form::label('password', 'Contraseña') }}
      {{ Form::password('password', array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-10">
      {{ Form::label('type', 'Tipo') }}
      {{ Form::select('type', array('member' => 'Miembro', 'admin'=>'Administrador'),null,array('class' => 'form-control','placeholder' => 'Seleccione una opción...','required' ))}}
    </div>
  </div>
  {{ Form::button('Crear usuario', array('type' => 'submit' ,'class' => 'btn btn-primary')) }}    
  
{!! Form::close() !!}

@endsection