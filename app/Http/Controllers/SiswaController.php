<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Siswa;
use App\Jurusan;
use PDF;
use \Carbon\Carbon;

class SiswaController extends Controller
{
    public function index(){
        return view('siswa.index');
    }

    public function data(){
        $siswa = \App\Siswa::all();
        return view('siswa.data', compact('siswa'));
    }

    public function tambah(){
        return view('siswa.tambah');
    }

    public function siswaregister(Request $request){
        // validasi
        $this->validate($request,[
            'nisn' => 'required',
            'nama' => 'required | min:5',
            'asal_sekolah' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
        // insert ke tabel user
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

        return redirect('/siswa/data')->with('sukses', 'Pendaftaran Berhasil');
    }

    public function profile(){
        $siswa = auth()->user()->siswa;
        $jur = \App\Jurusan::all();
        return view('siswa.profile', compact(['siswa', 'jur']));
    }

    public function edit(Siswa $siswa){
        $siswa = auth()->user()->siswa;
        $jurusan = \App\Jurusan::all();
        return view('siswa.edit', compact(['siswa', 'jurusan']));
    }

    public function update(Request $request, Siswa $siswa){
        $this->validate($request,[
            'nisn' => 'required',
            'nik' => 'required',
            'nama' => 'required | min:5',
            'jurusan_id' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'asal_sekolah' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'no_ijazah' => 'required'
            // 'avatar' => 'required|file'
        ]);

        // insert ke tabel siswa
        $siswa = auth()->user()->siswa;
        $siswa->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }

        return redirect('/siswa/profile')->with('sukses', 'Data Berhasil diperbarui');
    }
    public function exportpdf(Siswa $siswa){
        $siswa = auth()->user()->siswa;
        $tgl_lahir = $siswa->tgl_lahir;
        $tgl = \Carbon\Carbon::createFromFormat('Y-m-d', $tgl_lahir)->format('d F Y');
        $jur = \App\Jurusan::all();
        $pdf = PDF::loadView('export.exportpdf', compact('siswa', 'jur', 'tgl'));
        return $pdf->stream();
    }

    public function cetak(){
        return view('siswa.cetak');
    }
    
    public function editData($id, Siswa $siswa){
        $siswa = \App\Siswa::find($id);
        $jurusan = Jurusan::all();
        // dd($siswa);
        return view('siswa.edit', compact('siswa', 'jurusan'));
    }
}
