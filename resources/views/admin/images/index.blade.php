@extends('admin.template.main')

@section('title', 'Imágenes')

@section('content2')

    <div class="row">
        @foreach($images as $image)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="/images/articles/{{ $image->name }}" alt="" class="img-responsive img-circle">
                    </div>
                </div>
                <div class="panel-footer">{{ $image->article->title }}</div>
            </div>
            </div>
            @endforeach
    </div>
@endsection

@section('footer')