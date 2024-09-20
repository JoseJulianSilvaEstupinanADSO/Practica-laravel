<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlansRequest;
use App\Models\Factura;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pest\ArchPresets\Strict;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::all();
        return view('plans.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlansRequest $request)
    {
        Plan::create($request->all());
        return redirect()->route("plans.index");
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
    public function edit(Plan $plan)
    {
        return view('plans.edit',compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlansRequest $request, Plan $plan)
    {
        $plan->update($request->all());
        return redirect()->route('plans.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect()->route('plans.index');
    }

    public function buyplan(Request $request)
    {

        $plan = Plan::where('id', $request->id)->first();
        $user = Auth::id();
        $user_com = User::where('id', $user)->first();

        $fac = true;
        $plan_act = $user_com->plan;
        if ($plan_act) {
            foreach ($plan_act as $key => $value) {
                if ($value->id !== $plan->id) {
                    $user_com->plan()->detach($value->id);
                    // dd($plan_act);
                }
                else{
                    $fac = false;
                }
            }
        }
        $plan->users()->sync($user);
        if ($fac) {
            
            $factura = $this->Gen_factura($plan, $user);
        }
        return redirect()->route('plans.index');
    }
    public function Gen_factura( $plan, string $id)
    {
        // dd($plan);
        $factura = Factura::create([
            'total' => $plan->precio,
            'plan_id' => $plan->id,
            'nombre_plan' => $plan->name,
            'user_id' => $id,
        ]);
        return $factura;
    }
}
