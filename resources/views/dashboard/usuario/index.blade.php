@extends('layouts.site.admin')

@section('main')
    <div class="d-flex h-100">
        <div class="align-self-start mr-auto">
            <h2>Usuários</h2>
        </div>
        <div class="align-self-end ml-auto">
            <form action="{{ route('usuarios.create') }}">
                <button type="submit" class="btn btn-outline-secondary mb-2">Novo</button>
            </form>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary align-self-start">
                Todos os usuários
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" whidth="100%">
                    <thead>
                        {{-- <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Email</th> --}}
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Email</th>
                    </thead>
                    <tbody>

                        @foreach ($usuarios as $user)
                            <tr>
                                <td><a href="{{route('usuarios.show', ['usuario'=>$user->id])}}">{{$user->name}}</a></td>
                                <td>{{$user->surname}}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
