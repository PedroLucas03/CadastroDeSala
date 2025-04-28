<?php
namespace App\Http\Controllers; 

use App\Models\Reserva;
use App\Models\Sala;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function create()
    {
        $salas = Sala::all();
        return view('reservas.create', compact('salas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sala_id' => 'required|exists:salas,id',
            'usuario' => 'required',
            'data' => 'required|date',
            'horario' => 'required',
        ]);

        Reserva::create($request->all());

        return redirect()->route('reservas.index')->with('success', 'Reserva realizada com sucesso!');
    }

    public function index()
    {
        $reservas = Reserva::with('sala')->orderBy('data')->orderBy('horario')->get();
        return view('reservas.index', compact('reservas'));
    }
}
