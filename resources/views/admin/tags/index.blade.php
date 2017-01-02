@extends('admin.template.main')

@section('title', 'Lista de Tags')

@section('content2')

    <a href="{{ route('tags.create') }}" class="btn btn-info">Registrar Nuevo Tag</a>
    <!-- Buscador de Tags -->
    {!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
    <div class="form-group input-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar Tag...', 'aria-describedby' => 'search']) !!}
        <span class="input-group-addon btn" id="search"><span class=" glyphicon glyphicon-search"></span></span>
    </div>
    {!! Form::close() !!}
    <!-- Fin de buscador -->
    <hr>
    <table class="table table-hover table-responsive">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acción</th>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>{{ $tag -> id }}</td>
                <td>{{ $tag -> name }}</td>
                <td>
                    <a href="{{ route('tags.destroy', $tag->id) }}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
                    <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $tags -> render() !!}
@endsection

@section('footer')