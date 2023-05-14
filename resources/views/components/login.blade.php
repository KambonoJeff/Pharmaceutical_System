@extends('welcome')
@section('content')
<h1 align="center">Login Here</h1>
<div class="box-90">

<form action="{{ route('login') }}" method="post">
    @csrf
    <label for="email">email</label>
    <input type="email" name="email" id="email">
    <label for="password">password</label>
    <input type="password" name="password" id="password">
    <button type="submit">Submit</button>

</form>

</div>

@endsection



