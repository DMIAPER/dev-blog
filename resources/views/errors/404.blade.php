<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ro-RO">
<head profile="http://gmpg.org/xfn/11">
<title>Acceso Restringido</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}">
<link rel="stylesheet" href="{{asset('css/trumbowyg.css')}}">
<meta charset="utf-8"/>

<!--[if IE]>
<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Atención!</h1>
                <h2>
                    Acceso Restringido</h2>
                <div class="error-details">
                    Usted no tiene acceso a esta zona
                </div>
                <div class="error-actions">
                    <a href={{route('front.home')}} class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Volver al Inicio </a><a href="http://www.jquery2dotnet.com" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contacto </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end .wrapper -->
<script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/trumbowyg.js')}}"></script>

</body>
</html>