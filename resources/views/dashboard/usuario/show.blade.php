@extends('layouts.site.admin')

@section('main')
<div class="d-flex h-100">
    <div class="align-self-center mr-auto">
        <h2>Informações sobre: {{$user->name}}</h2>
    </div>
    <form action="#"> 
        <button type="submit" class="btn btn-outline-secondary mb-2">Apagar</button>
    </form>
    </div>
    
    <div class="card shadow mb-4" style="width: 100%; td, th: text-align:center">
            <div class="table-responsive">
                <table class="table table-bordered text-align-center" id="dataTable" whidth="50%">
                    <tbody>
                        {{-- @if ($user) --}}

                        id<tr>
                            ID: <td>{{$user->id}}</td>
                            
                        </tr>
                        nome<tr>
                            Nome: <td>{{ $user->name }}</td>
                            
                        </tr>
                        <tr>
                            Sobrenome: <td>{{$user->last_name}}</td>
                        </tr>
                        email<tr>
                            Email: <td>{{ $user->email}}</td>

                        </tr>
                        <tr>
                            Função: <td>{{$user->roles->first()->name}}</td>
                        </tr>
                            
                        {{-- @endif --}}
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="btn-group">
            <form action="{{ route('usuarios.edit', ['usuario' => $user->id]) }}" method="GET">
                <button class="btn btn-primary m-1">Editar</button>
            </form> 
            <form action="{{route('usuarios.index')}}" method="GET">
                <button class="btn btn-secondary m-1">Voltar</button>
            </form>
        </div>

@endsection
