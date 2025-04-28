<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    // Mostra todas as salas
    public function index()
    {
        $salas = Sala::all();
        return view('salas.index', compact('salas'));
    }

    // Formulário para criar uma nova sala
    public function create()
    {
        return view('salas.create');
    }

    // Salva uma nova sala
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'capacidade' => 'required|integer',
        ]);

        Sala::create($request->all());

        return redirect()->route('salas.index')->with('success', 'Sala criada com sucesso!');
    }
}
