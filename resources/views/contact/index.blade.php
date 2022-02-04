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
            <td>{{$contact->email}}</td>
            <td> 
              <a href="{{route('see.email', ['contact'=>$contact]) }}">
                <i class="fas fa-eye"></i>
              </a> 
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
@endsection