<?php

namespace App\Http\Controllers;

use App\matkul;
use Illuminate\Http\Request;
Use Alert;

class matkulController extends Controller
{
    public function index()
    {
        $matkul = matkul::all();
        return view('matkul.index', compact('matkul'));
    }

public function create()
{
    return view('matkul.create');
}

public function store(Request $request)
{
    Matkul::create($request->all());
    
    return redirect()->route('matkul');
}

public function edit($id)
{
    $matkul = matkul::find($id);
    return view('matkul.edit', compact('matkul'));
}
public function update(Request $request, $id)
{
    $matkul = matkul::find($id);
    $matkul->update($request->all());
    
    return redirect()->route('matkul');

}
public function destroy($id)
{
        $matkul = matkul::find($id);
        $matkul->delete();
        
        return redirect()->route('matkul');
}
}