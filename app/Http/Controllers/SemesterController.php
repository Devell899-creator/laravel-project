<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semester;

class SemesterController extends Controller
{
     // Show list + create form
    public function index()
    {
        $semesters = Semester::orderBy('start_date', 'desc')->get();
        return view('semester.index', compact('semesters'));
    }

    // Store new semester
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $data = $request->only(['name', 'start_date', 'end_date']);
        $data['is_current'] = $request->has('is_current') ? 1 : 0;

        Semester::create($data);

        return redirect()->back()->with('success', 'Semester added successfully!');
    }

    // Show edit form (optional if using modal via AJAX)
    public function edit($id)
    {
        $semester = Semester::findOrFail($id);
        return view('semester.edit', compact('semester')); // optional
    }

    // Update semester
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $semester = Semester::findOrFail($id);
        $data = $request->only(['name', 'start_date', 'end_date']);
        $data['is_current'] = $request->has('is_current') ? 1 : 0;

        $semester->update($data);

        return redirect()->back()->with('success', 'Semester updated successfully!');
    }

    // Soft delete semester
    public function destroy($id)
    {
        $semester = Semester::findOrFail($id);
        $semester->delete();
        return redirect()->back()->with('success', 'Semester deleted successfully!');
    }
}
