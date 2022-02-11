@extends('layouts.site.login-register')

@section('page-title')
	Login Admin
@endsection

@section('formulario')
<div class="wrap-login100 p-l-55 p-r-55 p-t-45 p-b-54">
<form class="login100-form validate-form" method="POST" action="{{url('/login/admin') }}">
	@csrf
	<span class="login100-form-title p-b-49">
		Login Admin
	</span>	

    <div class="wrap-input100 validate-input m-b-30" data-validate = "email is reauired">
        <span class="label-input100">Email</span>
        <input class="input100" type="email" name="email" id="email" placeholder="Insira seu email" required>
        <span class="focus-input100" data-symbol="&#xf206;"></span>
    </div>
	@error('email')
		<span class="alert alert-danger">{{$errors->first('email')}}</span>
	@enderror
	
	<div class="wrap-input100 validate-input m-b-30" data-validate="Password is required">
		<span class="label-input100">Senha</span>
		<input class="input100" type="password" name="password" placeholder="Insira sua senha" required>
		<span class="focus-input100" data-symbol="&#xf190;"></span>
	</div>
	@error('password')
		<span class="alert alert-danger">{{$errors->first('password')}}</span>
	@enderror

	
	<div class="text-right p-t-8 p-b-17">
		{{-- aqui é onde o espaçamento do login fica -p-b-*100* --}}
		<a href="#">
			Esqueceu sua senha?
		</a>
	</div>
	
	<div class="container-login100-form-btn">
		<div class="wrap-login100-form-btn">
			<div class="login100-form-bgbtn"></div>
			{{-- se nao funcionar colocar o A --}}
			<button class="login100-form-btn" type="submit">Entrar
			</button>
		</div>
	</div>
	
	{{-- <div class="flex-col-c p-t-25"> --}}
		{{-- espaçamento do cadastre-se aqui p-t-*55* --}}
		{{-- <span class="txt1 p-b-12"> --}}
			{{-- Não tem conta? --}}
			{{-- <a href="{{route('register-admin')}}" class="txt1"> --}}
				{{-- Cadastre-se aqui. --}}
			{{-- </a> --}}
		{{-- </span>   --}}
	{{-- </div> --}}
</form>
</div>
@endsection