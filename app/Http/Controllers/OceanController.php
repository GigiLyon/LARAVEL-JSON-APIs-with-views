<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocean;
use Session;

class OceanController extends Controller
{
    //
    function index(){
        // return ['City' => 'London'];
        return view('ocean', ['city' => 'San Fransisco']);
    }

    function show($id){
        echo "Hello from showFx => OceanController!".$id;
    }

    function ocean(){
        $data = Ocean::all();
        return view('ocean', ["data" => $data]);
        // return Ocean::where('artist', 'Kygo')->get();
        // return Ocean::find([1,3]); //find() returns by primary key only. 
        // return Ocean::first();
        // return Ocean::max('price'); //Price is the column with figures
        // return Ocean::min('price'); //Price is the column with figures
        // return Ocean::avg('price'); //Price is the column with figures
        // return Ocean::sum('price'); //Price is the column with figures
        // return Ocean::count('price'); //Price is the column with figures
    }

    function store(Request $request){
        Ocean::create([
            "name" => $request->input('name'),
            "color" => $request->input('color'),
            "artist" => $request->input('artist')
        ]);

        $request->session()->flash('status', 'Added Successfully');
        return redirect('/oceans');
    }

    function destroy($id){
        Ocean::find($id)->delete();
        Session::flash('status', 'Deleted Successfully');
        return redirect('/oceans');
    }

    function edit($id){
        $data = Ocean::find($id);
        return view('editOcean', ['data'=>$data]);
    }

    function update(Request $request){
        // return Ocean::find($request);
        $res = Ocean::find($request->id);
        $res->name = $request->input('name');
        $res->color = $request->input('color');
        $res->artist = $request->input('artist');
        $res->save();
        $request->session()->flash('status', 'Ocean Updated Successfully');
        return redirect('/oceans');
    }
}
