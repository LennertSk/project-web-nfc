@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Welcome, today is {{$current_date}}</h1>
  <br>
  <p> username: {{$username}}</p>
</div>
@endsection
