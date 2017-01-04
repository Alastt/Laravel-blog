@extends('admin.template.main')

@section('title', 'Lista de Artículos')

@section('content2')

    <a href="{{ route('articles.create') }}" class="btn btn-info">Registrar Nuevo Artículo</a>

    <hr>

@endsection

@section('footer')