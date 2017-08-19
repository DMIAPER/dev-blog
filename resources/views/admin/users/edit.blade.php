@extends('admin.template.main')

@section('title','Editar Usuario '.$user->name)

@section('content')



{!! Form::open(['route'=>['admin.users.update',$user],'method'=>'PUT']) !!}


<div class="row">    
    <div class="form-group col-md-10">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', $user->name, array('placeholder' => 'Introduce tu nombre', 'class' => 'form-control')) !!}        
    </div>
    <div class="form-group col-md-10">
      {!! Form::label('email', 'Correo Electrónico') !!}
      {!! Form::text('email', $user->email, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group col-md-10">
      {!! Form::label('type', 'Tipo') !!}
      {!! Form::select('type', array('member' => 'Miembro', 'admin'=>'Administrador'),$user->type,array('class' => 'form-control' ))!!}
    </div>
  </div>
  {!! Form::button('Actualizar', array('type' => 'submit' ,'class' => 'btn btn-primary')) !!}    
  
{!! Form::close() !!}

@endsection