@extends('app')

@section('title','Editar Cliente')
@section('content')

<form action="{{ route('clients.store') }}" method="POST">
    
    @csrf

    <div class="card-header">
          <strong>Editar Cliente</strong>
          <br>
          <br>
          <label for="nome" class="from-label">Nome</label>
          <br>
          <input type="text" class="form-control" id="nome" name="nome" 
          placeholder="Nome do cliente" value="{{$client->endereco}}">
          
          <br>
          <label for="endereco" class="from-label">Endereço</label>
          <br>
          <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Seu endereço">
          <br>
          <label for="nada" class="from-label">Frase de Efeito</label>
          <br>
          <input type="text" class="form-control" id="nada" name="nada" placeholder="Frase de Efeito!">
          <br>
          <label for="observacao" class="from-label">Observação</label>
          <br>
          <textarea class="form-control" name="observacao" id="observacao" cols="30" rows="10"></textarea>
          <br>
          <br>
          
    </div>

    <button class="btn btn-success" type="submit"> Incluir </button>
</form>

@endsection