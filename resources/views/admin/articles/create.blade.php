@extends('admin.template.main')

@section('title', 'Crear Artículo')

@section('content2')

    @include('admin.template.partials.errors')

    {!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Título') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título del articulo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Selecciona la categoría', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Contenido') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Escribe tu articulo aquí', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tags', 'Tag') !!}
        {!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'placeholder' => 'Selecciona los tags', 'required', 'multiple']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('image', 'Imagen') !!}
        {!! Form::file('image') !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Crear artículo', ['class' => 'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}

@endsection

@section('footer')