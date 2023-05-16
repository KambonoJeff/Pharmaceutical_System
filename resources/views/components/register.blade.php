@extends('welcome')
@section('content')
<h1 align="center">Register Here</h1>
<div class="box-90">
    <form class="form" action="{{ route('register') }}" method="post">
        @csrf
        <div align="" class="grid form-group">
            <label for="name">name</label>
            <input type="name" name="name" id="name" placeholder="Enter your name" value="{{old('name')}}">
            @error('message')
                <p>{{message}}</p>
            @enderror<br><br>
            <label for="email">email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" value="{{old('email')}}"><br><br>
            <label for="password">password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" ><br><br>
            <label for="password_confirm">Confirm password</label>
            <input type="password" name="password_confirm" id="password_confirm" placeholder="confirm your password"><br><br>
            <form method="post">
                @csrf
                <button type="submit">Register</button>

            </form>

        </div>


    </form>
</div>
@endsection


