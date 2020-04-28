@extends('layout.admin')

@section('title', 'Profile Siswa')

@section('content')
<div class="right_col" role="main" style="min-height: 1164px;">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
            <div class="x_title">
                <h2>Profile Siswa</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                <div class="profile_img">
                    <div id="crop-avatar">
                    <!-- Current avatar -->
                    <img class="img-responsive avatar-view" src="{{$siswa->getAvatar()}}" alt="Avatar" title="Change the avatar">
                    </div>
                </div>
                <h3>{{(auth()->user()->name)}}</h3>

                <ul class="list-unstyled user_data">
                    <li><i class="fa fa-map-marker user-profile-icon"></i> {{$siswa->alamat}}
                    </li>

                    <li class="m-top-xs">
                    <i class="fa fa-envelope-o user-profile-icon"></i>
                    {{(auth()->user()->email)}}
                    </li>
                </ul>

                <a href="/siswa/edit" class="btn btn-warning"><i class="fa fa-edit m-right-xs"></i> Edit Profile</a>
                <a href="/siswa/exportpdf" class="btn btn-success"><i class="fa fa-print m-right-xs"></i> Print</a>
                <br>

                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="x_content">
                        <br>
                        <form method="POST" action="/siswaregister" data-parsley-validate="" class="form-horizontal form-label-left">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">NISN</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control col-md-7 col-xs-12" readonly name="nisn" value="{{$siswa->nisn}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">NIK</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control col-md-7 col-xs-12" readonly name="nik" value="{{$siswa->nik}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text"name="nama"  class="form-control col-md-7 col-xs-12" value="{{$siswa->nama}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text"  class="form-control col-md-7 col-xs-12" value="@if($siswa->jurusan_id == '0') {{" "}} @else {{$siswa->jurusan->nama}} @endif" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat dan Taggal Lahir
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text"name="tmp_lahir"  class="form-control col-md-7 col-xs-12" value="{{$siswa->tmp_lahir.', '.$siswa->tgl_lahir}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Asal Sekolah </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control col-md-7 col-xs-12" type="text" name="asal_sekolah" value="{{$siswa->asal_sekolah}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Agama </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control col-md-7 col-xs-12" type="text" name="agama" value="{{$siswa->agama}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control col-md-7 col-xs-12" type="text" name="asal_sekolah"  @if($siswa->jenis_kelamin == 'P') value="Perempuan" @elseif ($siswa->jenis_kelamin == 'L') value="Laki-Laki" @endif readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Ijazah
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="no_ijazah"  class="form-control col-md-7 col-xs-12" value="{{$siswa->no_ijazah}}" readonly>
                            </div>
                        </div>
                        </div>

                        {{-- <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            <button class="btn btn-primary" type="reset">Cancel</button>
                            </div> --}}


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
    </div>
@endsection
