@extends('layouts.site.admin')

@section('main')
    <h2>Novo usuário</h2>
    <form method="POST" action="{{route('usuarios.store')}}">
       @csrf
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>

    <div class="mb-3">
        @foreach ($roles as $role)
            <div class="form-check">
                <input class="form-check-input " type="radio" name="roles[]" id="{{$role->id}}" value="{{$role->name}}">
                    <label class="form-check-label" for="{{$role->name}}">
                        {{$role->name}}
                    </label>
            </div>
        @endforeach
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
      <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="password" placeholder="Senha">
      </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Confirme a senha</label>
        <div class="col-sm-10">
          <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirme a senha">
        </div>
      </div>
    
    <div class="form-group row">
        <div class="col-sm-10 align-self-center ml-auto mt-5">
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </div>
    </form>
        {{-- @error('name')
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
        </div> --}}
    </form>
@endsection