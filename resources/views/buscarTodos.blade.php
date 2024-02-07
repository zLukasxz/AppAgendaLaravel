@extends('padrao')
@section('content')
<!-- inicio formulario -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
<div class="container m-4">
<form method="get" action="{{route('todos-contato')}}">
<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputcodigo" class="col-form-label">Digite o Nome</label>
    </div>
    <div class="col-auto">
        <input type="text" id="inputcodigo" name="nomeContato" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
         <button type="submit" class="btn btn-dark">Buscar</button>
    </div>
</form>
</div>
<!--fim formulario -->

<!--inicio tabela-->
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Fone</th>
      <th scope="col">Email</th>
      <th scope="col">Alterar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contatos as $contatosArray)
    <tr>
      <th scope="row">{{$contatosArray->id}}</th>
      <td>{{$contatosArray->nomeContato}}</td>
      <td>{{$contatosArray->foneContato}}</td>
      <td>{{$contatosArray->emailContato}}</td>
      <td>
        <a href="{{route('alterar-contato',$contatosArray->id)}}">
          <button type="button" class="btn btn-dark">
            <i class="bi bi-pencil-square"></i>
          </button>
        </a>
      </td>
      <td>
        <form method="post" Action="{{route('delete-contato',$contatosArray->id)}}">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger">
            <i class="bi bi-trash"></i>
          </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!--fim tabela-->
</div>
@endsection