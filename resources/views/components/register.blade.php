@extends('welcome')
@section('content')
<h1 align="center">Register Here</h1>
<div class="box-90">
    <form class="form" action="{{ route('register') }}" method="post">
        @csrf
        <div class="flex"></div>
        <label for="name">name</label>
        <input type="name" name="name" id="name"><br><br>
        <label for="email">email</label>
        <input type="email" name="email" id="email"><br><br>
        <label for="password">password</label>
        <input type="password" name="password" id="password"><br><br>
        <label for="password_confirm">password_confirm</label>
        <input type="password_confirm" name="password_confirm" id="password_confirm"><br><br>
        <form method="post">
            @csrf
            <button type="submit">Register</button>

        </form>

    </form>
</div>
@endsection


