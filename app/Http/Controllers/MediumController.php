<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medium;

class MediumController extends Controller
{
    
public function index()
{
    $mediums = Medium::all();
    return view('medium.index',compact('mediums'));
}

public function store(Request $request)
{
    Medium::create([
        'name' => $request->name
    ]);

    return redirect()->back();
}

public function edit($id)
{
    $medium = Medium::find($id);
    return view('medium.edit',compact('medium'));
}

public function update(Request $request,$id)
{
    $medium = Medium::find($id);

    $medium->name = $request->name;

    $medium->save();

    return redirect('/medium');
}

public function destroy($id)
{
    Medium::find($id)->delete();

    return redirect()->back();
}
}
