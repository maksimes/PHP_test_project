@extends('layouts._layout')
@section('content')
<div id="link">
    <h3>Мы Вас посчитали!</h3>
    <h5>Вы можете вернуться <a href="../">на главную</a> или отправить статистику просмотров и переходов по ссылке этого баннера себе на email.</h5>
    <br/>
    <form action="/sendmail/{{$link->banner_id}}" method="POST">
        {{ csrf_field() }}
        <label>Дата с: <input type="date" name="date_first"></label><br/>
        <label>Дата по: <input type="date" name="date_second"></label><br/>
        <label>Email: <input type="email" name="email"></label><br/>
        <input type="submit" value="Отправить">
    </form>
</div>
@endsection