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
    <hr>
    <div class="card-text">
      <div class="row justify-content-between align-items-center px-3">
        <p class="font-weight-light">{{$message->date()}}</p>
        <span>
          @if ($message->status != \App\Models\Message::RESPONDIDO)
            <a class="btn-link" id="reply-button">
              <i class="fas fa-reply fa-lg"></i>
            </a>    
          @endif          
        </span>
      </div>
      
      <p>{{$message->message}}</p>

    </div>

    <hr>
    <div class="card-text">
      @include('dashboard.message.form')
    </div>
    
  </div>
</div>

@endsection

@section('scripts')
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script>
  $("#reply-button").click(function(){
    var form = document.getElementById("form");
    if (form.style.display === "none") {
      form.style.display = "block";
      console.log("block");
    } else {
      form.style.display = "none";
      console.log("none");
    }
  });
</script>
@endsection