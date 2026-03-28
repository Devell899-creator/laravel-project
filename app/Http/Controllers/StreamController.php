<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stream;

class StreamController extends Controller
{
    public function index(){
        $streams = Stream::all();
        return view('stream.index', compact('streams'));
    }

    public function store(Request $request){
        Stream::create([
            'name' => $request->name
        ]);
    }

    public function edit($id){
        $stream = Stream::find($id);
        return view('stream.edit', compact('stream'));
    }

    public function update(Request $request,$id){
         $stream = Stream::find($id);
         $stream->name = $request->name;
         $stream->save();

         return redirect('/stream');
    }

    public function destroy($id){
       Stream::find($id)->delete();

       return redirect()->back();
    }

}
