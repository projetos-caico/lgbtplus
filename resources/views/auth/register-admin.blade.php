@extends('layouts.site.login-register')

@section('page-title') Cadastre-se @endsection

@section('formulario')
<div class="wrap-login100 p-l-55 p-r-55 p-t-45 p-b-54" style="height: 650px">
<form class="login100-form validate-form" method="POST" action="{{url('/cadastro/admin')}}">
	@csrf
	<span class="login100-form-title p-b-2">
        Cadastre-se   ADMIN
    </span>

    @error('name')
        {{$message}}
    @enderror
    <div class="wrap-input100 validate-input m-b-25">
        <span class="label-input100">Nome</span>
        <input class="input100" type="text" name="name" id="name" placeholder="Insira seu nome" required>
        <span class="focus-input100" data-symbol="&#xf206;"></span>
    </div>
    
    @error('email')
        <span class="alert alert-danger">{{$errors->first('email')}}</span>
    @enderror
    <div class="wrap-input100 validate-input m-b-20" data-validate = "email is required">
        <span class="label-input100">Email</span>
        <input class="input100" type="email" name="email" id="email" placeholder="Insira seu email" required>
        <span class="focus-input100" data-symbol="&#xf206;"></span>
    </div>

    {{-- <div class="wrap-input100 validate-input m-b-25" data-validate = "email is required">
        <span class="label-input100">Número de cadastro</span>
        <input class="input100" type="admin_number" name="admin_number" id="admin_number" placeholder="Nº de cadastro" required>
        <span class="focus-input100" data-symbol="&#xf206;"></span>
        @error('email')
			<span class="alert alert-danger">{{$errors->first('email')}}</span>
		@enderror
    </div> --}}


    @error('password')
        {{$message}}
    @enderror
    <div class="wrap-input100 validate-input m-b-25" data-validate="Password is required">
        <span class="label-input100">Senha</span>
        <input class="input100" type="password" name="password" id="password" placeholder="Insira sua senha" required>
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>
    
    @error('password_confirmation')
        {{$message}}
    @enderror
    <div class="wrap-input100 validate-input m-b-25" data-validate="Password is required">
        <span class="label-input100">Confirme a senha</span>
        <input class="input100" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirme sua senha" required>
        <span class="focus-input100" data-symbol="&#xf190;"></span>
    </div>
    
    <div class="container-login100-form-btn p-t-15">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn" type="submit">Entrar</button>
        </div>
    </div>
</form>
</div>
@endsection
