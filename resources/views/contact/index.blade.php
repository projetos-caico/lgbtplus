@extends('layouts.site.admin')
@section('main')
    
<h2>Caixa de entrada</h2>
@foreach ($contacts as $contact)
<li>{{ $contact->name }}</li>
@endforeach 
{{-- <table>
  <tr>
      <th>Remetente</th>
      <th>Mensagem</th>
      <th>Telefone</th>
      {{-- <th style="width: 3px">Deletar</th> --}}
  </tr>
  <tr>
      <td> <a class="cx" href="#">Maria Anders</a></td>
      <td>Alfreds Futterkiste</td>
      <td>(xx) xxxx-xxxx</td>
  </tr>
{{-- <td class="text-center"><i class="far fa-trash-alt"></i></td> --}}
  <tr> 
    <td>Francisco Chang</td>
    <td>Centro comercial Moctezuma</td>
    <td>(xx) xxxx-xxxx</td>
  </tr>
</table>  --}}
@endsection