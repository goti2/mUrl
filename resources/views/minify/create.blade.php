@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ссылки</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('minify.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Целевая ссылка</label>

                            <div class="col-md-6">
                                <input id="target" type="url" class="form-control" name="target" value="" placeholder="http://google.com" required autofocus>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Короткая ссылка (только имя)</label>

                            <div class="col-md-6">
                                <input id="segment" type="text" class="form-control" name="segment" value="" placeholder="z2tz" required >
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Pin код</label>

                            <div class="col-md-6">
                                <input id="pin" type="text" class="form-control" name="pin" value="" placeholder="2202" required>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Минифицировать ссылку
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
