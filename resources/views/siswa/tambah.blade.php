@extends('layout.admin')

@section('title', 'Tambah Siswa')

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
                            <h2>Tambah Data Siswa</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                            <form method="POST" action="/siswaregister" data-parsley-validate="" class="form-horizontal form-label-left">
                            @csrf
                            <div class="form-group {{$errors->has('nisn') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">NISN <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" name="nisn" placeholder="Masukkan NISN">
                                @if($errors->has('nisn'))
                                    <span class="invalid-feedback">{{$errors->first('nisn')}}</span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text"name="nama" placeholder="Nama Lengkap" class="form-control col-md-7 col-xs-12">
                                @if($errors->has('nama'))
                                <span class="invalid-feedback">{{$errors->first('nama')}}</span>
                            @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text"name="email" placeholder="Email" class="form-control col-md-7 col-xs-12">
                                @if($errors->has('email'))
                                <span class="invalid-feedback">{{$errors->first('email')}}</span>
                            @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password"name="password" class="form-control col-md-7 col-xs-12">
                                @if($errors->has('password'))
                                <span class="invalid-feedback">{{$errors->first('password')}}</span>
                            @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('asal_sekolah') ? 'has-error' : ''}}">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Asal Sekolah <span class="required">*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control col-md-7 col-xs-12" type="text" name="asal_sekolah" placeholder="Masukkan Asal Sekolah SMP">
                                @if($errors->has('asal_sekolah'))
                                    <span class="invalid-feedback">{{$errors->first('asal_sekolah')}}</span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('agama') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama <span class="required">*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="agama">
                                        <option selected>Pilih...</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Protestan">Protestan</option>
                                    </select>
                                </div>
                                @if($errors->has('agama'))
                                    <span class="invalid-feedback">{{$errors->first('agama')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="form-control" rows="3" name="alamat"></textarea>
                                    @if($errors->has('alamat'))
                                    <span class="invalid-feedback">{{$errors->first('alamat')}}</span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin <span class="required">*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="jenis_kelamin" value="L" data-parsley-multiple="gender"> &nbsp; Laki-Laki &nbsp;
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="jenis_kelamin" value="P" data-parsley-multiple="gender"> Perempuan
                                    </label>
                                </div>
                                @if($errors->has('jenis_kelamin'))
                                    <span class="invalid-feedback">{{$errors->first('jenis_kelamin')}}</span>
                                @endif
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
