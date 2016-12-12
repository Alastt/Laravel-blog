@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content2')

    @include('admin.template.partials.errors')

    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('email', 'Correo Electronico') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'example@example.com', 'required']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '**********', 'required']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('type', 'Tipo') !!}
        {!! Form::select('type', ['' => 'Seleccione un tipo...', 'admin' => 'Administrador','member' => 'Miembro' ], null, ['class' => 'form-control', 'required']) !!}
        </div>

        {!! Form::token() !!}

        <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>


    {!! Form::close() !!}

@endsection

@section('footer')