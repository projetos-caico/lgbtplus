@extends('layouts.admin')

@section('content')


    <form action="{{url('/register')}}" method="POST">
        @csrf

        <input type="email" name="email" placeholder="email">
        <input type="text" name="text" placeholder="nome">
        <input type="password" name="password" placeholder="senha">
        <input type="password" name="password_confirmation" placeholder="confirme senha">
        <button>
            enviar
        </button>

    </form>
    
@endsection