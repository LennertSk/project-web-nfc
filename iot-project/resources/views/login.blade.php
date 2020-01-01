@extends('layouts.app')

@section('content')

<div class="container container-login">
  <form method="POST" action="{{ url('login/check') }}" class="form-login">

    <h1>Welcome! Or we lost a cookie along the way</h1>
    @csrf

    <label for="username">What should we call you ?</label>
    <input id="username" type="text" class="form-login-input @error('username') is-invalid @enderror" name='username' required>
    @error('username')
      <div class="form-login-error">{{ $message }}</div>
    @enderror

    <button type="submit" class="form-login-submit-btn">
      {{ __('Continue') }}
    </button>
    </div>

  </form >
</div>
@endsection
