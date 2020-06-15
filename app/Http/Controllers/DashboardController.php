<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jurusan;

class DashboardController extends Controller
{
    public function index(){
        $siswa = \App\Siswa::all();
        $rpl = DB::table('siswa')->where('jurusan_id', '1')->count();
        $tkr = DB::table('siswa')->where('jurusan_id', '3')->count();
        $tpm = DB::table('siswa')->where('jurusan_id', '2')->count();
        return view('dashboard.index', compact('siswa', 'rpl', 'tpm', 'tkr'));
    }
}
