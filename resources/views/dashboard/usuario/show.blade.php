@extends('layouts.site.admin')

@section('main')
    <div class="d-flex h-100">
        <div class="align-self-start mr-auto">
            <h2>Informações do usuário</h2>
        </div>
    </div>
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" whidth="100%">
                    <tbody>

                        @foreach ($usuarios as $user)
                        <tr><td>ID: {{ $user->id }}</td></tr>
                        <tr><td>Nome: {{$user->name}}</td></tr>
                        <tr><td>Email: {{ $user->email }}</td></tr>
                        <tr><td>Função: {{$user->roles->first()->name}}</td></tr>

                        {{-- <tr>
                                <td>ID: {{ $user->id }}</td>
                                {{-- <td>{{ $user->name }}</td> --}}
                                {{-- <td><a href="{{route('aqui')}}">{{ $user->name }}</a></td> --

                                <td>Nome: {{$user->name}}</td>

                                <td>Email: {{ $user->email }}</td>

                                {{-- <td>{{$user->role}}</td> --}}
                                {{-- @foreach ($roles as $role)
                                    <td>{{ $user->role }}</td>
                                @endforeach --}
                            </tr> --}}
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="align-self-end ml-auto">
        <form action="">
            <button type="submit" class="btn btn-outline-secondary mb-2">Voltar</button>
        </form>
        
    </div>
@endsection
