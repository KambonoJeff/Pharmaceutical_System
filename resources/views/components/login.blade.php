@extends('welcome')
@section('content')
<h1 align="center">Login Here</h1>
<div class="box-90">

<form class="form" action="{{ route('login') }}" method="post">
    @csrf
    <div align="" class="grid form-group">
        <label for="email">email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" value="{{old('email')}}">
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <form method="post">
        @csrf
        <button align="center" type="submit">Submit</button>
        </form>
    </div>


</form>

</div>

@endsection



