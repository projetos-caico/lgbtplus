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
    <div class="table-responsive" >
      <table class="table table-bordered" id="dataTable" whidth="100%">
        <thead>
          <th>Nome</th>
          <th>Email</th>
          <th>Ações</th>
        </thead>
        <tfoot>
          <th>Nome</th>
          <th>Email</th>
          <th>Ações</th>
        </tfoot>
        <tbody>
          @foreach ($contacts as $contact)
          <tr>
            <td>{{$contact->name}}</td>
            <td style="max-width:50%">
              <div class="row justify-content-between mx-1">
                {{$contact->email}} 
                
                @if($contact->status == 0)
                <span class="badge badge-primary">{{$contact->status()}}</span>
                @elseif($contact->status == 1)
                <span class="badge badge-secondary">{{$contact->status()}}</span>
                @else
                <span class="badge badge-success">{{$contact->status()}}</span>
                @endif
                
              </div>
            </td>
            <td> 
              <div class="row justify-content-center">
                <a href="" class="pr-3">
                  <i class="fas fa-reply"></i>
                </a>   
                <a href="{{route('see.email', ['contact'=>$contact]) }}">
                  <i class="fas fa-eye"></i>
                </a>                 
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>{{-- end of table --}}
    </div>
    <div class="row justify-content-end pr-3">
      {{ $contacts->links() }}
    </div>
    
  </div>
</div>

@endsection

@section('scripts')

<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script>
  $(document).ready(function(){
    $("#dataTable").DataTable({
      "paging": false,
      "info": false,
      "search": false,  
    });
  });
</script>

@endsection