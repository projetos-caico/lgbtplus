@extends('layouts.login-register')

@section('page-title')
	Login
@endsection

@section('formulario')
<form class="login100-form validate-form" method="POST" action="{{url('/login') }}">
	@csrf
	<span class="login100-form-title p-b-49">
		Login
	</span>
	
	<div class="wrap-input100 validate-input m-b-30" data-validate = "email is reauired">
        <span class="label-input100">Email</span>
        <input class="input100" type="email" name="email" id="email" placeholder="Insira seu email" required>
        <span class="focus-input100" data-symbol="&#xf206;"></span>
    </div>
	<div class="wrap-input100 validate-input m-b-30" data-validate="Password is required">
		<span class="label-input100">Senha</span>
		<input class="input100" type="password" name="password" placeholder="Insira sua senha">
		<span class="focus-input100" data-symbol="&#xf190;"></span>
	</div>
	
	<div class="text-right p-t-8 p-b-65">
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
	
	<div class="flex-col-c p-t-75">
		{{-- espaçamento do cadastre-se aqui p-t-*55* --}}
		<span class="txt1 p-b-17">
			Não tem conta?
			<a href="{{route('register')}}" class="txt1">
				Cadastre-se aqui.
			</a>
		</span> 
	</div>
</form>

@endsection