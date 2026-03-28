<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    // Show index page + Create Form + Subject List
    public function index()
    {
        $subjects = Subject::all();
        return view('subject.index', compact('subjects'));
    }

    // Store new subject (form submit from index page)
    public function store(Request $request)
    {
        $data = $request->all();

        // Image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('subject'), $name); // folder name matches public/subject
            $data['image'] = $name;
        }

        Subject::create($data);

        return redirect('/subject')->with('success', 'Subject Added Successfully');
    }

    // Show edit form (optional, can be inline in index)
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subject.edit', compact('subject')); // optional
    }

    // Update subject
    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('subject'), $name);
            $data['image'] = $name;
        }

        $subject->update($data);

        return redirect('/subject')->with('success', 'Subject Updated Successfully');
    }

    // Delete subject
    public function destroy($id)
    {
        Subject::destroy($id);
        return redirect('/subject')->with('success', 'Subject Deleted Successfully');
    }
}