@extends('layouts.template-modern')

@section('title-page')Perfil @endsection

@section('menu-item1')
    Notícias
@endsection
@section('menu-item2')
<form id="logout" action="{{ route('logout') }}" method="POST">
    @csrf
 </form>
<li class="nav-item"><a class="nav-link" href="#" onclick="document.getElementById('logout').submit(); return false;">Sair</a></li>
@endsection

@section('main')

@endsection
