@extends('layouts.site.admin')


@section('links')
<link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('main')

<h2>Caixa de Entrada</h2>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- Message Header -->
    <h6 class="m-0">
      <div class="row align-items-center">
        <div class="col">         
          <p style="margin: 0;">Nome: {{$message->name}}</p>
          <p style="margin: 0;">Email: {{$message->email}}</p>
        </div>
        <div class="col-auto">
          <span>
            @if ($message->status != \App\Models\Message::RESPONDIDO)
              <a class="btn-link" id="reply-button">
                <i class="fas fa-reply fa-lg"></i>
              </a>    
            @endif          
          </span>
        </div>
      </div>
    </h6>
  </div>

  <div class="card-body">         
        
    <div class="card-text">      
      <div class="row justify-content-end align-items-center px-3">
        <p class="font-weight-light">{{$message->date()}}</p>
      </div>
      <p>{{$message->message}}</p>
    </div>
    <hr>

    @if ($message->status == \App\Models\Message::RESPONDIDO)
    <div>
      <p>Situação: <b class="text-lgbt-purple">{{$message->status()}}</b></p>
    </div>
    @else
    <div class="card-text">
      @include('dashboard.message.form')
    </div>   
    @endif

    
    
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