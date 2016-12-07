@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content2')

    <a href="{{ route('users.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a>

    <hr>

    <table class="table table-hover table-responsive">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Tipo</th>
        <th>Acción</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user -> id }}</td>
                    <td>{{ $user -> name }}</td>
                    <td>{{ $user -> email }}</td>
                    <td>
                        @if($user -> type == 'admin')
                            <span class="label label-danger">{{ $user -> type }}</span>
                            @else
                            <span class="label label-primary">{{ $user -> type }}</span>
                        @endif

                    </td>
                    <td><a href="" class="btn btn-danger glyphicon glyphicon-remove"></a> <a href="" class="btn btn-warning glyphicon glyphicon-wrench"></a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!! $users -> render() !!}
@endsection

@section('footer')