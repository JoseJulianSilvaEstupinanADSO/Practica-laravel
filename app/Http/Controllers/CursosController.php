<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursosRequest;
use App\Models\Curso;
use App\Models\Organization;
use App\Models\Plan;
use App\Models\Subscripcion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organizations = Organization::pluck('name', 'id'); 

        return view('cursos.create', compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CursosRequest $request)
    {
        $cursos = Curso::create($request->all());
        $cursos->organization()->sync($request->organization);

        return redirect()->route('cursos.index');
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
    public function edit(Curso $curso)
    {   
        $organizations = Organization::pluck('name', 'id'); 
        return view('cursos.edit',compact('curso', 'organizations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CursosRequest $request, Curso $curso)
    {
        $curso->update($request->all());
        $curso->organization()->sync($request->organization);

        return redirect()->route('cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        $curso->organization()->detach();
        $curso->delete();
        return redirect()->route('cursos.index');
    }
    
    public function subs_curso(Request $request)
    {
        $id_user = Auth::id();
        $user = User::where('id',$id_user)->first();
        $plan = $user->plan()->first();
        if ($plan->cant_subs > $plan->pivot->cant_suscripciones ) {
            $curso = Curso::where('id', $request->id)->first();
            $sub = Subscripcion::create([
                'curso_id' => $curso->id
            ]);
            $user->subs()->sync($sub->id);
            $user->plan()->updateExistingPivot($plan->id, [
                'cant_suscripciones' => $plan->pivot->cant_suscripciones + 1
            ]);
        }
        return redirect()->route('cursos.index');


    }
}
