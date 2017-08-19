@extends('admin.template.main')

@section('title','Lista de Imagenes')

@section('content')


 @if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
      <p>{{ $message }}</p>
        </div>
    @endif


<div class="row">
	@foreach($images as $image)

	<div class="col-md-4">
		
		<div class="panel panel-default">
		  <div class="panel-body">
		    <img src="/images/articles/{{$image->name}}" class="img-responsive">
		  </div>
		  <div class="panel-footer">{{$image->article->title}}</div>
		</div>

	</div>

	@endforeach

</div>
{!! $images->render() !!}
@endsection