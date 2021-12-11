@extends('layouts.login-register')

@section('page-title')
    Cadastre-se
@endsection

@section('formulario')
<form class="login100-form validate-form" method="POST" action="{{url('/register')}}">
	@csrf
	<span class="login100-form-title p-b-49">
        Cadastre-se
    </span>
    
    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
        <span class="label-input100">Email</span>
        <input class="input100" type="email" name="email" id="email" placeholder="Insira seu email" required>
        <span class="focus-input100" data-symbol="&#xf206;"></span>
    </div>
    
    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
        <span class="label-input100">Usuário</span>
        <input class="input100" type="text" name="username" id="username" placeholder="Insira seu usuário" required>
        <span class="focus-input100" data-symbol="&#xf206;"></span>
    </div>
    
    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
        <span class="label-input100">Senha</span>
        <input class="input100" type="password" name="password" id="password" placeholder="Insira sua senha" required>
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>
    
    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
        <span class="label-input100">Confirme a senha</span>
        <input class="input100" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirme sua senha" required>
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>
    
    <div class="container-login100-form-btn p-t-30">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn" type="submit">Entrar
			</button>
        </div>
    </div>
</form>
@endsection
