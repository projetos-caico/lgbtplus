@extends('layouts.site.admin')


@section('links')
<link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main')

<h2>Caixa de Entrada</h2>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
      Mensagens
    </h6>
  </div>
  <div class="card-body">         
    <div class="row px-2">
        <h5 class="card-title font-weight-light">Nome: <b>{{$contact->name}}</b></h5>
    </div>
    <div class="row px-2">
        <h6 class="card-subtitle font-weight-light">{{$contact->email}}</h6>
    </div>
    <hr>
    <div class="card-text">
        {{$contact->message}}
    </div>
    
  </div>
</div>

@endsection

@section('scripts')
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
@endsection