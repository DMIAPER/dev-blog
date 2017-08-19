@extends('admin.template.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                <div class="panel-heading">Página de Inicio</div>

                <div class="panel-body">
                     @if (Auth::check())
                    Bienvenido a la Aplicación


                    @else
                    Debes Logearte!!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
