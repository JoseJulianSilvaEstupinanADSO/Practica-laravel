<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlansRequest;
use App\Models\Plan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function buyplan(Plan $plan)
    {
        $user = Auth::id();
        dd($plan->name);
    }
}
