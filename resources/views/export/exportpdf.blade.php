<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>{{$siswa->nama}}</title>
    <style>

    </style>
</head>
<body>
    <table class="table">
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td>{{$siswa->nisn}}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td>{{$siswa->nik}}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{$siswa->nama}}</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>@if($siswa->jurusan_id == '0') {{" "}} @else {{$siswa->jurusan->nama}} @endif</td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>{{$siswa->tmp_lahir.', '.$tgl}}</td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td>{{$siswa->asal_sekolah}}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>{{$siswa->agama}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{$siswa->alamat}}</td>
        </tr>
        <tr>
            <td>No Ijazah</td>
            <td>:</td>
            <td>{{$siswa->no_ijazah}}</td>
        </tr>
        <tr>
            <td>Tanggal Daftar</td>
            <td>:</td>
            <td>{{$siswa->created_at}}</td>
        </tr>
    </table>

</body>
</html>
