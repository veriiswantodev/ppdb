@extends('layout.site')

@section('content')
{{-- Banner  --}}
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Pendaftaran
                </h1>
                <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Pendaftaran</a></p>
            </div>
        </div>
    </div>
</section>
{{-- End Banner --}}

{{-- register --}}
<section class="search-course-area relative" style="background: unset;">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 col-md-5 search-course-left">
                <h1>
                    PPDB Online <br>
                    Mari Bergabung dengan Kami.
                </h1>
                <p>
                    Dengan menerapkan kurikulum industri siswa akan mampu bersaing di dunia industri.
                </p>
                <div class="row details-content">
                    <div class="col single-detials">
                        <span class="lnr lnr-graduation-hat"></span>
                        <a href="#"><h4>Expert Instructors</h4></a>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                    <div class="col single-detials">
                        <span class="lnr lnr-license"></span>
                        <a href="#"><h4>Certification</h4></a>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 search-course-right section-gap">
                {!! Form::open(['url' => '/postregister', 'class' => 'form-wrap']) !!}
                    <h4 class="pb-20 text-center mb-30">Form Pendaftaran</h4>
                    {!! Form::text('nisn','', ['class' => 'form-control','placeholder' => 'NISN']) !!}
                    {!! Form::text('nama','', ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
                    {!! Form::text('asal_sekolah', '', ['class' => 'form-control', 'placeholder' => 'Asal Sekolah']) !!}
                    {!! Form::text('agama', '', ['class' => 'form-control', 'placeholder' => 'Agama']) !!}
                    {!! Form::textarea('alamat', '', ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
                    <div class="form-select" id="service-select">
                        {!! Form::select('jenis_kelamin', ['' => 'Pilih Jenis Kelamin', 'L' => 'Laki - Laki', 'P' => 'Perempuan'], ['style' => 'display:none;', 'class' => 'form-control']); !!}
                    </div>
                    {!! Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                    <input type="submit" class="primary-btn text-uppercase" value="Daftar">
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
{{-- End Register --}}

@endsection
