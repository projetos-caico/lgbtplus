@extends('layouts.site.login-register')

@section('page-title')
    Cadastre-se
@endsection

@section('formulario')
<div class="wrap-login100 p-l-55 p-r-55 p-t-45 p-b-54">
<form class="login100-form validate-form" method="POST" action="{{url('/register')}}">
	@csrf
	<span class="login100-form-title p-b-2">
        Cadastre-se
    </span>
    
    <div class="wrap-input100 validate-input m-b-25" data-validate = "email is reauired">
        <span class="label-input100">Email</span>
        <input class="input100" type="email" name="email" id="email" placeholder="Insira seu email" required>
        <span class="focus-input100" data-symbol="&#xf206;"></span>
        @error('email')
			<span class="alert alert-danger">{{$errors->first('email')}}</span>
		@enderror
    </div>

    <div class="wrap-input100 validate-input m-b-25">
        <span class="label-input100">Nome</span>
        @error('name')
			<span class="alert alert-danger">{{$errors->first('name')}}</span>
		@enderror
        <input class="input100" type="text" name="name" id="name" placeholder="Insira seu nome" required>
        <span class="focus-input100" data-symbol="&#xf206;"></span>
    </div>

    <div class="wrap-input100 validate-input m-b-25" data-validate="Password is required">
        <span class="label-input100">Senha</span>
        @error('password')
			<span class="alert alert-danger">A senha precisa ter no mínimo 8 caracteres</span>
		@enderror
        <input class="input100" type="password" name="password" id="password" placeholder="Insira sua senha" required>
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>
    
    <div class="wrap-input100 validate-input m-b-25" data-validate="Password is required">
        <span class="label-input100">Confirme a senha</span>
        <input class="input100" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirme sua senha" required>
        @error('password_confirmation')
            {{$message}}
        @enderror
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>
    
    <div class="container-login100-form-btn p-t-50">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn" type="submit">Entrar</button>
        </div>
    </div>
</form>
</div>
@endsection
