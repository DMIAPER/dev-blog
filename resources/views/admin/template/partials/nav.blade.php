<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{route('admin.home')}}">Inicio</a></li>
         @if (Auth::check())

                 @if(Auth::user()->admin())
                     <li><a href="{{route('admin.users.index')}}">Usuarios</a></li>
                 @endif 

        <li><a href="{{route('admin.categories.index')}}">Categorias</a></li>
        <li><a href="{{route('admin.articles.index')}}">Artículos</a></li>
        <li><a href="{{route('admin.images.index')}}">Imagenes</a></li>
        <li><a href="{{route('admin.tags.index')}}">Tags</a></li>
        @endif
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="{{route('front.home')}}" target="_blank">Página Principal</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>