@extends('layouts.app')

@section('content')

<div class="container-home container-welcome ">
	<div class="wrapper-home">
		<form method="POST" action="{{ url('login/check') }}" class="form-login">
			<h1>Welcome!</h1>
			@csrf
			<label for="username">Please enter your username below.</label>
			<input id="username" type="text" class="login-input-field @error('username') is-invalid @enderror" name='username' required>
			@error('username')
				<div class="form-login-error">{{ $message }}</div>
			@enderror
			@if (!is_null($error))
				<br>
				{{$error}}
			@endif

			<button type="submit" name='action' value='login' class="submit-btn submit-btn-login">
				{{ __('Login') }}
			</button>
			<button type="submit" name='action'value='register' class="submit-btn submit-btn-register">
				{{ __('Register') }}
			</button>
		</form >
	</div> 
</div>
@endsection
