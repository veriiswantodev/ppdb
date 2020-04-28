<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = ['user_id','nisn', 'nama', 'asal_sekolah', 'agama', 'alamat', 'jenis_kelamin','nik','jurusan_id','tmp_lahir','tgl_lahir','no_ijazah', 'avatar'];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }

    public function getAvatar(){
        if(!$this->avatar){
            return asset('images/default.png');
        }
            return asset('images/'.$this->avatar);
    }

    public function getCreatedAtAttribute(){
        \Carbon\Carbon::setLocale('id');
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d F Y');
        return \Carbon\Carbon::parse($this->attributes['updated_at'])->diffForHumans();

    }
}
