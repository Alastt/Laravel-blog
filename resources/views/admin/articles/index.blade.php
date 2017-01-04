@extends('admin.template.main')

@section('title', 'Lista de Artículos')

@section('content2')

    <a href="{{ route('articles.create') }}" class="btn btn-info">Registrar Nuevo Artículo</a>
    <!-- Buscador de artículos -->
    {!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
    <div class="form-group input-group">
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar Artículo...', 'aria-describedby' => 'search']) !!}
        <span class="input-group-addon btn" id="search"><span class=" glyphicon glyphicon-search"></span></span>
    </div>
    {!! Form::close() !!}
    <!-- Fin de buscador -->
    <hr>

    <table class="table table-responsive table-bordered table-stripped">
        <thead>
        <th>ID</th>
        <th>Título</th>
        <th>Categoría</th>
        <th>Usuario</th>
        <th>Acción</th>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->category->name }}</td>
                    <td>{{ $article->user->name }}</td>
                    <td>
                        <a href="{{ route('articles.destroy', $article->id) }}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!! $articles -> render() !!}
@endsection

@section('footer')