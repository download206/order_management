<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;



class ClientController extends Controller
{
    // Método para exibir a lista de clientes
    public function index()
    {
        $clients = Client::paginate(10); // Exemplo com paginação
        return view('clients.index', compact('clients'));
    }

    // Método para exibir o formulário de criação de um novo cliente
    public function create()
    {
        return view('clients.create');
    }

    // Método para salvar um novo cliente
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients',
            'phone' => 'required|string|max:20',
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')->with('success', 'Cliente criado com sucesso.');
    }

    // Método para exibir os cliente
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    // Método para exibir o formulário de edição de um cliente existente
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    // Método para atualizar os dados de um cliente existente
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'phone' => 'required|string|max:20',
        ]);

        $client->update($request->all());

        return redirect()->route('clients.index')->with('success', 'Cliente atualizado com sucesso.');
    }

    // Método para deletar um cliente
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Cliente deletado com sucesso.');
    }

    // Método para fazer logout
    public function logout(Request $request)
    {
        Auth::logout(); // Faz logout do usuário
        $request->session()->invalidate(); // Invalida a sessão
        $request->session()->regenerateToken(); // Regenera o token da sessão

        // Define a mensagem de sucesso na sessão
        $request->session()->flash('success', 'Você saiu com sucesso.');

        // Redireciona para a página inicial
        return redirect('/');
    }
}