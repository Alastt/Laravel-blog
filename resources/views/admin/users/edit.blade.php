@extends('admin.template.main')

@section('title', 'Editar Usuario: ' . $user->name)

@section('content2')

    {!! Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', $user->name, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Correo Electronico') !!}
        {!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@example.com', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type', 'Tipo') !!}
        {!! Form::select('type', ['admin' => 'Administrador','member' => 'Miembro' ], $user->type, ['class' => 'form-control', 'required']) !!}
    </div>

    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection

@section('footer')