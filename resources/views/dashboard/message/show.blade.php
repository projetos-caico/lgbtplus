@extends('layouts.site.admin')


@section('links')
<link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main')

<h2>Caixa de Entrada</h2>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
      Mensagem
    </h6>
  </div>
  <div class="card-body">         
    
    <div class="row justify-content-between align-items-center px-2">
        <h5 class="card-title font-weight-light">Nome: <b>{{$message->name}}</b></h5>
        <span class="badge badge-primary">{{$message->status()}}</span>
    </div>
    
    <div class="row px-2">
      <h6 class="card-subtitle font-weight-light">{{$message->email}}</h6>
    </div>

    {{-- <div class="row px-2">
      <h6 class="font-weight-light"></h6>
    </div> --}}

    <hr>
    <div class="card-text">
      <div class="row justify-content-between align-items-center px-3">
        <p class="font-weight-light">{{$message->date()}}</p>
        <span><i class="fas fa-reply fa-lg"></i></span>
      </div>
      
      <p>{{$message->message}}</p>

    </div>
    
  </div>
</div>

@endsection

@section('scripts')
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
@endsection