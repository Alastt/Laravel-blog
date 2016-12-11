@extends('admin.template.main')

@section('title', 'Editar Categoría: ' . $category->name)

@section('content2')

    {!! Form::model($category, array('route' => array('categories.update', $category->id), 'method' => 'PUT')) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', $category->name, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection

@section('footer')