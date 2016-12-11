@extends('admin.template.main')

@section('title', 'Login')

@section('content2')
    {!! Form::open(['route' => 'auth.login', 'method' => 'POST']) !!}

    <div class="form-group">
    {!! Form::label('email', 'Correo Electronico') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'example@example.com', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '**********', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Ingresar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close('') !!}
@endsection

@section('footer')