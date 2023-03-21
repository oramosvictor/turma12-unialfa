@extends('app')

@section('title','Lista de Clientes')
@section('content')
        <div class="card-header">
          Lista de Produtos
        </div>
        <table class = "table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>

                        <th scope="row">{{ $client ->id }}</th>
                        <th scope="row">
                            <a href="{{ route('clients.show',$client) }}">
                                {{ $client ->nome }}
                            </a>
                            </th>
                        <th scope="row">{{ $client ->endereco }}</th>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <a class="btn btn-dark" href="{{ route('clients.create')}}">
          Novo Cliente
        </a>

        <a class="btn btn-success" href="{{ route('clients.create')}}">
          Novo Produto
        </a>
@endsection