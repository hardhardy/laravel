@extends('layouts.main')

@section('title')
    @parent
    Создать новость
@endsection

@section('content')
    <h1>Добавить новость</h1>
    <form action="login" method="post">
        <input placeholder="Категория" type="text" name="category">
        <input placeholder="Название" type="text" name="title">
        <input placeholder="Текст" type="text" name="text">
        <button class="add">Добавить</button>
    </form>
@endsection
