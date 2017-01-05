@extends('admin.template.main')

@section('title', 'Editar Artículo: ' . $article->title)

@section('content2')

    {!! Form::model($article, array('route' => array('articles.update', $article->id), 'method' => 'PUT')) !!}

    <div class="form-group">
        {!! Form::label('title', 'Título') !!}
        {!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Título del articulo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control select-cat', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Contenido') !!}
        {!! Form::textarea('content', $article->content, ['class' => 'form-control textarea-content', 'placeholder' => 'Escribe tu articulo aquí', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tags', 'Tag') !!}
        {!! Form::select('tags[]', $tags, $my_tags, ['class' => 'form-control select-tag', 'required', 'multiple']) !!}
    </div>
    <hr>
    <div class="form-group">
        {!! Form::submit('Actualizar artículo', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    <script>
        $('.select-tag').chosen({
            placeholder_text_multiple: 'Seleccione los tags',
            no_results_text: "No se encuentran coincidencias!",
            max_selected_options: 3
        });
        $('.select-cat').chosen({
            placeholder_text_single: 'Seleccione la categoría',
            no_results_text: "No se encuentran coincidencias!",
        });
        $('.textarea-content').trumbowyg({
            lang: 'es',
        });
        $('.select-tag').trigger('chosen:updated');
        $('.select-cat').trigger('chosen:updated');
    </script>

@endsection

@section('footer')