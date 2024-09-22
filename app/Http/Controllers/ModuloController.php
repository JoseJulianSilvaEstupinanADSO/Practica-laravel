<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModuloRequest;
use App\Models\Curso;
use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Curso $curso)
    {
        $modulos = Modulo::where('curso_id', $curso->id)->get();
        return view('modulos.index', compact('curso', 'modulos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Curso $curso)
    {
        return view('modulos.create', compact('curso'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModuloRequest $request)
    {
        $modulo = Modulo::create($request->all());
        $curso = Curso::where('id', $modulo->curso_id)->first();
        return redirect()->route('modulos.index', compact('curso'));
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
    public function edit(Modulo $modulo)
    {
        $curso = Curso::where('id', $modulo->curso_id)->first();
        return view('modulos.edit', compact('modulo', 'curso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModuloRequest $request, Modulo $modulo)
    {
        $modulo->update($request->all());
        $curso = Curso::where('id', $modulo->curso_id)->first();
        return redirect()->route('modulos.index', compact('curso'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modulo $modulo)
    {
        $curso = Curso::where('id', $modulo->curso_id)->first();
        $modulo->delete();
        return redirect()->route('modulos.index', compact('curso'));
    }
}
