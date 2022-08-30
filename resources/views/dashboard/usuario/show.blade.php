@extends('layouts.site.admin')

@section('main')
<div class="d-flex h-100">
    <div class="align-self-center mr-auto m-3">
        <h2>Informações sobre {{$user->name}}</h2>
    </div>
    <form action="#"> 
        <button type="submit" class="btn btn-outline-secondary mb-2">Apagar</button>
    </form>
</div>
<div class="col-md-9">
    <div class="card mb-5">
        <div class="card-body">
            <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Nome</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            {{$user->name}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Sobrenome</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            {{$user->surname}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Email</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            {{$user->email}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Função</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            {{-- {{$user->roles->first()->name}} --}}
          </div>
        </div>
        {{-- <hr> --}}
        {{-- <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Address</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            Bay Area, San Francisco, CA
          </div>
        </div> --}}
        <hr>
       
        <div class="btn-group">
            <form action="{{ route('usuarios.edit', ['usuario' => $user->id]) }}" method="GET">
                <button class="btn btn-primary m-1">Editar</button>
            </form> 
            <form action="{{route('usuarios.index')}}" method="GET">
                <button class="btn btn-secondary m-1">Voltar</button>
            </form>
        </div>
      </div>
    </div>
@endsection
