<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class ClientController extends Controller
{
    public function index () {

     $clients = Client::get();
     return view('clients.index',[
        'clients'=> $clients
     ]);
     // Buscar os clientes no banco de dados
        
}

//Mostra um cliente específico

public function show(int $id)
{
    $client = Client::find($id);
    return view('clients.show',[
        'client' => $client
    ]);
}

    //Mostra uma view para cadastrar novos clientes

    public function create()
    {
        return view('clients.create');
    }

    //Cria um novo cliente e recebe como parametro um request e retorna um RedirectResponse

    public function store(Request $request)
    {
       $dados = $request->except('_token');
        Client::create($dados);
        return redirect('/clients');
        //dd($request);
    }

    //Mostra o formulário de editar um determinado cliente 

    public function edit(int $id)
    {
        $client = Client::find($id);

        return view('clients.edit',[
            'client' => $client
        ]);
    }
    // Deleta um cliente específico 
    
    public function destroy(int $id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients');
    }
}