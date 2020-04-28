<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function about(){
        return view('site.about');
    }

    public function register(){
        return view('site.register');
    }

    public function login(){
        return view('login');
    }

    public function postregister(Request $request){
        // insert ke tabel user
        $this->validate($request,[
            'nisn' => 'required',
            'nama' => 'required | min:5',
            'asal_sekolah' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required|email|unique',
            'password' => 'required|min:8'
        ]);

        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(40);
        $user->save();


        // insert ke tabel siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = \App\Siswa::create($request->all());

        return redirect('/')->with('sukses', 'Pendaftaran Berhasil');
    }
}
