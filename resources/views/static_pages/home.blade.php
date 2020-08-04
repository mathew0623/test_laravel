@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      <a href="https://learnku.com/courses/laravel-essential-training">Laravel home page</a>
    </p>
    <p>
      Nothing here
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">SIGN UP NOW</a>
    </p>
  </div>
@stop