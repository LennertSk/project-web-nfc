@extends('layouts.app')

@section('content')

<div class="container container-login">
  <form method="POST" action="{{ url('login/confirm') }}" class="form-login">

    <h1>We already know {{$username}}</h1>
    @csrf

    <label for="username">Please confirm this is you.</label>
    <input id="confirm" type="text" class="form-login-input @error('confirm') is-invalid @enderror" name='confirm' required>
    @error('confirm')
      <div class="form-login-error">{{ $message }}</div>
    @enderror

    <button type="submit" class="form-login-submit-btn">
      {{ __('Confirm') }}
    </button>
    <a class="nav-item-link" href='{{ url(login) }}'>This is not me.</a>
    </div>

  </form >
</div>
@endsection
