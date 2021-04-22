@extends('layouts.main')

@section('title')
    @parent
    Создать новость
@endsection

@section('content')
    <h1>Добавить новость</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            {!! Form::open(['route' => 'admin::news::save']) !!}
            <label class="form-label">
                Заголовок
            </label>
            <div class="form-group">
                {!! Form::text('news[title]','', ['class' => 'form-control']) !!}
            </div>
            <label class="form-label">
                Содержимое
            </label>
            <div class="form-group">
                {!! Form::textarea('news[content]','', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit("Отправить", ['class' => "btn btn-success"]) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
