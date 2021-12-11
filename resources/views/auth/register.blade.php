@extends('layouts.login-register')

@section('page-title')
    Cadastre-se
@endsection

@section('formulario')
<span class="login100-form-title p-b-49">
	Cadastre-se
</span>

<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
	<span class="label-input100">Email</span>
	<input class="input100" type="email" name="username" placeholder="Type your username">
	<span class="focus-input100" data-symbol="&#xf206;"></span>
</div>

<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
	<span class="label-input100">Username</span>
	<input class="input100" type="text" name="username" placeholder="Type your username">
	<span class="focus-input100" data-symbol="&#xf206;"></span>
</div>

<div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
	<span class="label-input100">Password</span>
	<input class="input100" type="password" name="pass" placeholder="Type your password">
	<span class="focus-input100" data-symbol="&#xf190;"></span>
</div>

<div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
	<span class="label-input100">Confirme a senha</span>
	<input class="input100" type="password" name="pass" placeholder="Type your password">
	<span class="focus-input100" data-symbol="&#xf190;"></span>
</div>

<div class="container-login100-form-btn p-t-30">
	<div class="wrap-login100-form-btn">
		<div class="login100-form-bgbtn"></div>
		<a href="{{route('welcome')}}">
		<button class="login100-form-btn" href="{{route('welcome')}}">Entrar</button>
		</a>
		{{-- <button class="login100-form-btn" href="{{route('welcome')}}">
			<a class ="login100-form-btn" href="{{route('welcome')}}">Login</a>
		</button> --}}
	</div>
</div>

@endsection