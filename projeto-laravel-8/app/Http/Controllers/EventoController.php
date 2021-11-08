<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{

    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index', ['eventos' => $eventos]);
    }


    public function create()
    {
        return view('eventos.create');
    }


    public function store(Request $request)
    {
        $evento = $request->all();
        Evento::create($evento);
        return redirect()->route('eventos.index')->with('msg', 'Evento criado com sucesso');
    }
}
