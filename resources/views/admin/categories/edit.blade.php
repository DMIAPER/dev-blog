@extends('admin.template.main')

@section('title','Editar Categoria '.$category->name)

@section('content')



{!! Form::open(['route'=>['admin.categories.update',$category],'method'=>'PUT']) !!}


<div class="row">    
    <div class="form-group col-md-10">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', $category->name, array('placeholder' => 'Introduce la Categoria', 'class' => 'form-control')) !!}        
    </div>

     <div class="form-group col-md-10">
      {{ Form::label('descripcion', 'Descripcion') }}
     {{ Form::textarea('descripcion', $category->descripcion, ['class' => 'form-control textarea-content']) }}
    </div>  

</div>
  {!! Form::button('Actualizar', array('type' => 'submit' ,'class' => 'btn btn-primary')) !!}    
  
{!! Form::close() !!}

@endsection