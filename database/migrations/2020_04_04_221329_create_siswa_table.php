<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('jurusan_id')->nullable;
            $table->string('nisn');
            $table->integer('nik')->nullable;
            $table->string('nama');
            $table->string('tmp_lahir')->nullable;
            $table->date('tgl_lahir')->nullable;
            $table->string('asal_sekolah');
            $table->string('agama');
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['L','P']);
            $table->string('no_ijazah')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
