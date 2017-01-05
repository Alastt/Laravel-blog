<style type="text/css">
    body { padding-top: 70px; }
</style>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ asset('home') }}"><img src="/images/AnimalsMosquito.png" height="50px" width="50px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if(Auth::user())
            <ul class="nav navbar-nav">
                <li><a href="{{ route('users.index') }}">Usuarios</a></li>
                <li><a href="{{ route('categories.index') }}">Categorias</a></li>
                <li><a href="{{ route('articles.index') }}">Articulos</a></li>
                <li><a href="{{ route('images.index') }}">Imagenes</a></li>
                <li><a href="{{ route('tags.index') }}">Tags</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Perfil</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{  route('auth.logout') }}">Salir</a></li>
                    </ul>
                </li>
            </ul>
                @else
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('auth.login') }}">Inicia Sesión</a></li>
                    </li>
                </ul>
                @endif
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>