@extends('padrao')
@section('content')
<div class="container">
<form class="row g-3" method="post" action="{{route('cadastrar-contato')}}">
        @csrf
        <div class="col-md-8"> 
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" name='nomeContato' id="inputNome">
        </div>
        <div class="col-md-4">
            <label for="inputFone" class="form-label">Fone</label>
            <input type="text" class="form-control" name='foneContato' id="inputFone">
        </div>
        <div class="col-md-8">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="e-mail" class="form-control" name='emailContato' id="inputEmail">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-dark">Salvar</button>
        </div>
    </form>
</div>
@endsection