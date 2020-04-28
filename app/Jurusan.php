<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';

    protected $fillable = ['kode', 'nama'];

    public function siswa(){
        return $this->hasMany(Siswa::class);
    }
}
