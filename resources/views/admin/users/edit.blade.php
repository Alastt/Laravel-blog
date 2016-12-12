@extends('admin.template.main')

@section('title', 'Editar Usuario: ' . $user -> name)

@section('content2')

    {!! Form::model($user,['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Correo Electronico') !!}
        {!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'user@correo.com', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type', 'Tipo') !!}
        {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection