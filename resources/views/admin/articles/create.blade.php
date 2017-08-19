@extends('admin.template.main')

@section('title','Agregar Artículo')

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

{!! Form::open(['route'=>'admin.articles.store','method'=>'POST','files'=>'true']) !!}


<div class="row">    
    <div class="form-group col-md-10">
      {{ Form::label('title', 'Titulo') }}
      {{ Form::text('title', null, array('placeholder' => 'Introduce el nombre del Artículo', 'class' => 'form-control')) }}        
    </div>   

    <div class="form-group col-md-10">
      {{ Form::label('category_id', 'Categoria') }}
      {{ Form::select('category_id', $categories, null, array( 'class' => 'form-control inline','required')) }}        
    </div> 

    <div class="form-group col-md-10">
      {{ Form::label('content', 'Contenido') }}
     {{ Form::textarea('content', null, ['class' => 'form-control textarea-content']) }}
    </div> 

    <div class="form-group col-md-10">
      {{ Form::label('idVideo', 'IdVideo') }}
      {{ Form::text('idVideo', null, array('placeholder' => 'Introduce el Id del Vídeo', 'class' => 'form-control')) }}        
    </div>   


     <div class="form-group col-md-10">
      {{ Form::label('tags', 'Tags') }}
      {{ Form::select('tags[]', $tags, null, array('class' => 'form-control select-tag','multiple','required')) }}        
    </div> 

    <div class="form-group col-md-10">
      {{ Form::label('image', 'Imagen') }}
      {{ Form::file('image',null) }}        
    </div> 

  </div>
  {{ Form::button('Agregar Artículo', array('type' => 'submit' ,'class' => 'btn btn-primary')) }}    
  
{!! Form::close() !!}

@endsection


@section('js')

<script>

  $('.select-tag').chosen({
    placeholder_text_multiple: 'Seleccione 3 tags como máximo',
    max_selected_options: 3,
    search_contains: true,
    no_result_text: 'No se encontraron estos Tags'

  });
$.trumbowyg.svgPath = '/images/icons.svg';
$('.textarea-content').trumbowyg({
  //svgPath : 'public/css/icons.svg';
});

</script>

@endsection