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

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Função</label>
            <div class="col-sm-10">
                @foreach ($roles as $role)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="roles[]" id="{{$role->id}}" value="{{$role->name}}">
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
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </div>
    </form>
@endsection