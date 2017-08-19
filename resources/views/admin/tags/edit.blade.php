@extends('admin.template.main')

@section('title','Editar Tag '.$tag->name)

@section('content')



{!! Form::open(['route'=>['admin.tags.update',$tag],'method'=>'PUT']) !!}


<div class="row">    
    <div class="form-group col-md-10">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', $tag->name, array('placeholder' => 'Introduce el Tag', 'class' => 'form-control')) !!}        
    </div>
</div>
  {!! Form::button('Actualizar', array('type' => 'submit' ,'class' => 'btn btn-primary')) !!}    
  
{!! Form::close() !!}

@endsection