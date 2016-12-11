@extends('admin.template.main')

@section('title', 'Lista de Categorías')

@section('content2')

    <a href="{{ route('categories.create') }}" class="btn btn-info">Registrar Nueva Categoría</a>

    <hr>

    <table class="table table-hover table-responsive">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acción</th>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category -> id }}</td>
                <td>{{ $category ->name }}</td>
                <td>
                    <a href="{{ route('categories.destroy', $category->id) }}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $categories -> render() !!}
@endsection

@section('footer')