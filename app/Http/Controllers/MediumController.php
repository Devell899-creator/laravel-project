<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medium;

class MediumController extends Controller
{
    public function index()
    {
        $mediums = Medium::all();
        return view('medium.index', compact('mediums'));
    }

    public function store(Request $request)
    {
        Medium::create([
            'name' => $request->name
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        Medium::destroy($id);
        return redirect()->back();
    }
}
