@extends('layout.admin')

@section('title', 'Siswa')
@section('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="right_col" role="main" style="min-height: 3744px;">
<div class="">
    <div class="clearfix"></div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        <div class="x_title">
            <h2>Data Siswa</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link justify-content-end"><i class="fa fa-chevron-up"></i></a></li>
            </ul>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr role="row">
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Asal Sekolah</th>
                                    <th>Agama</th>
                                    <th>ALamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($siswa as $s)
                                <tr>
                                    <td>{{$s->nisn}}</td>
                                    <td>{{$s->nama}}</td>
                                    <td>{{$s->asal_sekolah}}</td>
                                    <td>{{$s->agama}}</td>
                                    <td>{{$s->alamat}}</td>
                                    <td>{{$s->jenis_kelamin}}</td>
                                    <td><a href="/siswa/{{$s->id}}/edit" class="btn btn-warning btn-xs"><span class="fa fa-edit"></span></a></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
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
        $(document).ready(function(){
            $('#datatable').DataTable({
                paginate: false,
                scrollY: 300
            });
        });
    </script>

@endsection
