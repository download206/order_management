<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create()
    {
        // Exemplo de dados que podem ser retornados para criar um cliente
        // Aqui, você pode retornar qualquer dado que seja necessário para a criação do recurso
        return response()->json([
            'message' => 'Endpoint para fornecer dados necessários para criar um novo cliente',
            // 'data' => ['algum_dado_necessário']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable|numeric',
        ]);

        $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return response()->json([
            'message' => 'Client created successfully!',
            'client' => $client,
        ], 201);
    }
}
