@extends('layout.admin')

@section('title', 'Edit Siswa')

@section('content')
<div class="right_col" role="main" style="min-height: 3744px;">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_content">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit Data</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="">
                            <br>
                            <form method="POST" action="/siswa/update" data-parsley-validate="" class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group {{$errors->has('nisn') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">NISN <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" name="nisn" value="{{$siswa->nisn}}">
                                @if($errors->has('nisn'))
                                    <span class="invalid-feedback">{{$errors->first('nisn')}}</span>
                                @endif
                                </div>
                            </div>

                                <input type="hidden" name="user_id" placeholder="user_id" class="form-control col-md-7 col-xs-12" value="{{$siswa->user_id}}"s>

                            <div class="form-group {{$errors->has('nik') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">NIK <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="nik" placeholder="nik" class="form-control col-md-7 col-xs-12" value="{{$siswa->nik}}"s>
                                @if($errors->has('nik'))
                                <span class="invalid-feedback">{{$errors->first('nik')}}</span>
                            @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control col-md-7 col-xs-12" value="{{$siswa->nama}}">
                                @if($errors->has('nama'))
                                <span class="invalid-feedback">{{$errors->first('nama')}}</span>
                            @endif
                                </div>
                            </div>

                            <div class="form-group {{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan <span class="required">*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="jurusan_id">
                                        @foreach ($jurusan as $jur)
                                        <option value="{{$jur->id}}">{{$jur->kode.' - '.$jur->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if($errors->has('jenis_kelamin'))
                                    <span class="invalid-feedback">{{$errors->first('jenis_kelamin')}}</span>
                                @endif
                            </div>


                            <div class="form-group {{$errors->has('tmp_lahir') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="tmp_lahir" name="tmp_lahir" class="form-control col-md-7 col-xs-12" value="{{$siswa->tmp_lahir}}">
                                @if($errors->has('tmp_lahir'))
                                <span class="invalid-feedback">{{$errors->first('tmp_lahir')}}</span>
                            @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('tgl_lahir') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputxs">
                                <input type="text" name="tgl_lahir" class="form-control col-md-7 col-xs-12 datepicker-here" data-language='en' data-position="top left" value="{{$siswa->tgl_lahir}}">
                                @if($errors->has('tgl_lahir'))
                                <span class="invalid-feedback">{{$errors->first('tgl_lahir')}}</span>
                            @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('asal_sekolah') ? 'has-error' : ''}}">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Asal Sekolah <span class="required">*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control col-md-7 col-xs-12" type="text" name="asal_sekolah" value="{{$siswa->asal_sekolah}}">
                                @if($errors->has('asal_sekolah'))
                                    <span class="invalid-feedback">{{$errors->first('asal_sekolah')}}</span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('agama') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama <span class="required">*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="agama">
                                        <option value="Islam" @if($siswa->agama == 'Islam') selected @endif>Islam</option>
                                        <option value="Kristen" @if($siswa->agama == 'Kristen') selected @endif>Kristen</option>
                                        <option value="Budha" @if($siswa->agama == 'Budha') selected @endif>Budha</option>
                                        <option value="Hindu" @if($siswa->agama == 'Hindu') selected @endif>Hindu</option>
                                        <option value="Protestan" @if($siswa->agama == 'Protestan') selected @endif>Protestan</option>
                                    </select>
                                </div>
                                @if($errors->has('agama'))
                                    <span class="invalid-feedback">{{$errors->first('agama')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="form-control" rows="3" name="alamat">{{$siswa->alamat}}</textarea>
                                    @if($errors->has('alamat'))
                                    <span class="invalid-feedback">{{$errors->first('alamat')}}</span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin <span class="required">*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="jenis_kelamin">
                                        <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                                        <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                @if($errors->has('jenis_kelamin'))
                                    <span class="invalid-feedback">{{$errors->first('jenis_kelamin')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('no_ijazah') ? 'has-error' : ''}}">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">No. Ijazah <span class="required">*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control col-md-7 col-xs-12" type="text" name="no_ijazah" value="{{$siswa->no_ijazah}}">
                                @if($errors->has('no_ijazah'))
                                    <span class="invalid-feedback">{{$errors->first('no_ijazah')}}</span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('avatar') ? 'has-error' : ''}}">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Foto<span class="required">*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control col-md-7 col-xs-12" type="file" name="avatar" value="{{$siswa->avatar}}">
                                @if($errors->has('avatar'))
                                    <span class="invalid-feedback">{{$errors->first('avatar')}}</span>
                                @endif
                                </div>
                            </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                <button class="btn btn-primary" type="reset">Cancel</button>
                                </div>
                            </div>

                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('footer')
    <script>

    </script>
@endsection
