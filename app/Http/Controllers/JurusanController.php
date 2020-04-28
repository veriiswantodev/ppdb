<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index(){
        $jurusan = \App\Jurusan::all();
        return view('jurusan.index', compact('jurusan'));
    }

    public function create(Request $request){
        $jur = \App\Jurusan::create($request->all());
        return redirect('jurusan')->with('sukses', 'Data Berhasil disimpan!');
    }

    public function delete($id){
        $jurusan = \App\Jurusan::find($id)->delete();
        return redirect('jurusan')->with('sukses', 'Data Berhasil dihapus!');
    }
}
