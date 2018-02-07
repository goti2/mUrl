@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ссылки - <a href="{{route('minify.create')}}">Создать новую ссылку</a></div>



                <div class="panel-body">
                    @foreach($urls as $url)
                        <p> ID: {{ $url->id }}
                            Pin: {{ $url->pin }}
                            Целевая ссылка: {{ $url->target }}
                            Короткая ссылка: {{ $url->segment }}
                            <a href="{{ route('minify.edit', $url) }}">Редактировать</a>
                        <form method="POST" action="{{ route('minify.destroy', $url) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button> Удалить </button>
                        </form>
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
