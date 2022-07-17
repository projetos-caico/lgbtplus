@extends('layouts.site.admin')

@section('main')
    <div class="d-flex h-100">
        <div class="align-self-center mr-auto">
            <h2>Informações do usuário</h2>
        </div>
    </div>
    
    <div class="card shadow mb-4" style="width: 50%; td, th: text-align:center">
        {{-- <div class="card-body"> --}}
            <div class="table-responsive">
                <table class="table table-bordered text-align-center" id="dataTable" whidth="50%">
                    <tbody>

                        @foreach ($usuarios as $user)
                        <tr><td>ID: {{ $user->id }}</td></tr>
                        <tr><td>Nome: {{$user->name}}</td></tr>
                        <tr><td>Email: {{ $user->email }}</td></tr>
                        <tr><td>Função: {{$user->roles->first()->name}}</td></tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
            {{-- </div> --}}
        </div>
    <div class="align-self-end ml-auto">
        {{-- <form action=""> --}}
            <button type="submit" class="btn btn-outline-secondary mb-2">Voltar</button>
        {{-- </form> --}}
        
    </div>
@endsection
