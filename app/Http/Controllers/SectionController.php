<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    public function index() {

        $sections = Section::all();
        return view('section.index', compact('sections'));
    }

    public function store(Request $request){
        Section::create([
            'name' => $request->name
        ]);

        return redirect()->back();
    }

    public function edit($id){
        $section = Section::find($id);
        return view('section.edit', compact('section'));
    }

    public function update(Request $request,$id){
        $section = Section::find($id);

        $section->name = $request->name;

        $section->save();

        return redirect('/section');
    }

    public function destroy($id){
        Section::find($id)->delete();

        return redirect()->back();
    }
}
