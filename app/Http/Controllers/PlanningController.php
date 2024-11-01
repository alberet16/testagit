<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyPlan;
use App\Models\MyPlanningHistory;

class PlanningController extends Controller
{
    public function index()
    {
        $plannings = MyPlan::all();
        $planningHistories = MyPlanningHistory::orderBy('modified_at', 'desc')->get();
        return view('planning.index', compact('plannings', 'planningHistories'));
    }

    public function edit()
    {
        $plannings = MyPlan::all();
        return view('planning.edit', compact('plannings'));
    }

    public function update(Request $request)
    {
        foreach ($request->input('production_plan') as $id => $newPlan) {
            $planning = MyPlan::findOrFail($id);

            if ($planning->production_plan != $newPlan) {
                MyPlanningHistory::create([
                    'day' => $planning->day,
                    'old_production_plan' => $planning->production_plan,
                    'new_production_plan' => $newPlan,
                    'modified_at' => now()
                ]);

                $planning->update(['production_plan' => $newPlan]);
            }
        }

        return redirect()->route('planning.index')->with('success', 'Planning updated successfully');
    }
}
