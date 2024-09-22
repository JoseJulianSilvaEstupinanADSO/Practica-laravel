<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContenidoRequest;
use App\Models\Contenido;
use App\Models\Modulo;
use Illuminate\Http\Request;

class ContenidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Modulo $modulo)
    {
        $contenidos = Contenido::where('modulo_id', $modulo->id)->get();
        return view('contenidos.index', compact('contenidos','modulo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Modulo $modulo)
    {
        return view('contenidos.create', compact('modulo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContenidoRequest $request)
    {
        Contenido::create($request->all());
        $modulo = Modulo::where('id', $request->modulo_id)->first();
        return redirect()->route('contenidos.index', compact('modulo'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contenido $contenido)
    {
        $modulo = Modulo::where('id', $contenido->modulo_id)->first();
        return view('contenidos.edit', compact('contenido', 'modulo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContenidoRequest $request, Contenido $contenido)
    {
        $contenido->update($request->all());
        $modulo = Modulo::where('id', $request->modulo_id)->first();
        return redirect()->route('contenidos.index', compact('modulo'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
