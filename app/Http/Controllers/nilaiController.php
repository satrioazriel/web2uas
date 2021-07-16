<?php

namespace App\Http\Controllers;

use App\nilai;
use Illuminate\Http\Request;
use alert;
use App\mahasiswa;
use App\matkul;


class nilaiController extends Controller
    {
        public function index()
    {
        $nilai = Nilai::with(['mahasiswa','matkul'])->get();
        return view('nilai.index', compact('nilai'));
    }
    public function create()
{
    $matkul = Matkul::all();
    $mahasiswa = Mahasiswa::all();
    return view('nilai.create', compact('matkul','mahasiswa'));
}
    
    public function store(Request $request)
    {
        Nilai::create($request->all());
       
        return redirect()->route('nilai');
    }
    
    public function edit($id)
    {
        $matkul = Matkul::all();
    $mahasiswa = Mahasiswa::all();
    $nilai = Nilai::find($id);
    return view('nilai.edit', compact('nilai','matkul','mahasiswa'));
    }
    public function update(Request $request, $id)
    {
        $nilai =Nilai::find($id);
        $nilai->update($request->all());  
        return redirect()->route('nilai');
    
    }
    public function destroy($id)
    {
            $nilai = Nilai::find($id);
            $nilai->delete();
            
            return redirect()->route('nilai');
    }
    }

