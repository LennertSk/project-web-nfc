@extends('layouts.app')

@section('content')

<div class="container-home">
	<div class="wrapper-home">
		<h1>Welcome!</h1>
		<div class="home-div">
			<div class="home-info">
				<form method="POST" action="{{ url('login/check') }}" class="form-login">
					@csrf
					<label class="home-p" for="username">Please enter your username below.</label>
					<input id="username" type="text" class="login-input-field @error('username') is-invalid @enderror" name='username' required>
					@error('username')
						<div class="form-login-error">{{ $message }}</div>
					@enderror
					@if (!is_null($error))
						<br>
						{{$error}}
					@endif
					<div class="login-button">
						<button type="submit" name='action' value='login' class="submit-btn submit-btn-login">
							{{ __('Login') }}
						</button>
					</div>
					<div class="login-button">
						<button type="submit" name='action'value='register' class="submit-btn submit-btn-register">
							{{ __('Register') }}
						</button>
					</div>
				</form >
			</div>
		</div>
	</div> 
</div>
@endsection
