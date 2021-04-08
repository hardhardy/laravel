@extends('layouts.main')

@section('title')
    @parent
    Личный кабинет
@endsection

@section('content')
    <h1>Личный кабинет</h1>
    <form action="login" method="post">
        <input placeholder="Login" type="text" name="login">
        <input placeholder="Password" type="text" name="password">
        <button class="login">Войти</button>
    </form>
    <p>Если у вас нет учетной записи, зарегистрируйтесь:</p>
    <form action="registration" method="post">
        <input placeholder="Login" type="text" name="login">
        <input placeholder="Password" type="text" name="password">
        <input placeholder="Confirm password" type="text" name="confirm password">
        <button class="order">Зарегистрироваться</button>
    </form>
@endsection
