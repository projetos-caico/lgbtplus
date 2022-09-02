@extends('layouts.site.admin')

@section('main')
    <h2>Editar usuário</h2>
    <form action="{{ route('usuarios.update', ['usuario'=>$user->id])}}" method="POST" >
       @method('PUT')
       @csrf
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="{{$user->name}}">
            </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Sobrenome</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="surname" id="surname" placeholder="Sobrenome" value="{{$user->surname}}">
          </div>
      </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$user->email}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Função</label>
            <div class="col-sm-10">
                @foreach ($roles as $role)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="role" id="{{$role->id}}" value="{{$role->name}}" 
                    @isset($user)
                    @if (in_array($role->id, $user->roles->pluck('id')->toArray())) checked  @endif   
                    @endisset>
                        <label class="form-check-label text-capitalize" for="{{$role->name}}">
                            {{$role->name}}
                        </label>
                </div>
            @endforeach           
        </div>

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
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </div>
    </form>

    
@endsection