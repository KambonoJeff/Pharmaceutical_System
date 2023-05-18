@extends('welcome')

@section('content')
<div class="community">

<h1>This the community page</h1>
<div class="mb-2">
    <div class="flex w-60">
        <h4>{{ auth()->user()->name}}</h4><p>date</p>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi praesentium perspiciatis necessitatibus alias voluptatem. Velit laudantium ex labore!</p>
    <a href="#">Like</a>
    <a href="#">Unlike</a>

</div>
<form action="{{ route('community')}}" method="post">
    @csrf
    <input class= "post-form"  type="text" placeholder="Enter your comment here please"  name="input" value="{{ old('input')}}">
    <button class="btn" type="submit">Post</button>
</form>
</div>

@endsection

