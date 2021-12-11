@extends('layouts.login-register')

@section('page-title')
    Cadastre-se
@endsection

@section('formulario')
<form class="login100-form validate-form" method="POST"">
	@csrf
	<span class="login100-form-title p-b-49">
        Cadastre-se
    </span>
    
    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
        <span class="label-input100">Email</span>
        <input class="input100" type="email" name="username" placeholder="Insira seu email">
        <span class="focus-input100" data-symbol="&#xf206;"></span>
    </div>
    
    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
        <span class="label-input100">Usuário</span>
        <input class="input100" type="text" name="username" placeholder="Insira seu usuário">
        <span class="focus-input100" data-symbol="&#xf206;"></span>
    </div>
    
    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
        <span class="label-input100">Senha</span>
        <input class="input100" type="password" name="pass" placeholder="Insira sua senha">
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>
    
    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
        <span class="label-input100">Confirme a senha</span>
        <input class="input100" type="password" name="pass" placeholder="Confirme sua senha">
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>
    
    <div class="container-login100-form-btn p-t-30">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn">
				<a class="login100-forn-btn" href="{{route('perfil')}}" style="text-decoration: none"> Entrar</a>
			</button>
        </div>
    </div>
</form>
@endsection
