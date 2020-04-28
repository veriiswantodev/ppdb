@extends('layout.admin')

@section('title', 'Jurusan')
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
            <h2>Data Jurusan</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a  class="link" data-toggle="modal" data-target=".modalTambah"><i class="fa fa-plus"></i></a></li>
            </ul>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr role="row">
                                    <th class="text-center">KODE</th>
                                    <th class="text-center">NAMA</th>
                                    <th class="text-center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($jurusan as $jur)
                                <tr>
                                    <td>{{$jur->kode}}</td>
                                    <td>{{$jur->nama}}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-warning btn-xs"><span class="fa fa-edit"></span> Edit</a>
                                        <a href="#" class="btn btn-danger btn-xs delete" jurusan-id="{{$jur->id}}" nama-jur="{{$jur->nama}}"><span class="fa fa-trash"></span> Hapus</a>
                                    </td>
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
<div class="modal fade modalTambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel2">Tmbah Jurusan</h4>
        </div>
        <div class="modal-body">
            <form action="/postjurusan" method="post">
                @csrf
                <div class="form-group">
                    <label class="control-label">Kode <span class="required">*</span></label>
                    <input type="text" name="kode" class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label">Nama <span class="required">*</span></label>
                    <input type="text" name="nama" class="form-control">
                </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-default ml-auto" data-placement="right" data-dismiss="modal">Keluar</button>
            </form>
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


    $('.delete').click(function(){
        var nama_jur = $(this).attr('nama-jur');
        var jurusan_id = $(this).attr('jurusan-id');
        swal({
            title: "Yakin?",
            text: "Anda akan menghapus jurusan "+nama_jur+" ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/jurusan/"+jurusan_id+"/delete";

        }

        });
    });
});
</script>

@endsection
