<!DOCTYPE html>
<html lang="en">

<head>
    <title>APP Apotik</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Codedthemes" />
<style>
    @page { margin: 0px; }
body { margin: 0px; }
</style>
</head>

<body>
    <table>
        <tbody>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{$swab->nama}}</td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td>{{$swab->umur}}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{$swab->jenis_kelamin}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{$swab->alamat}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <center>
    <table class="table" border="1px" style="width: 100%">
        <thead>
            <tr>
                <th width="25%">Nama Tes</th>
                <th width="25%">Hasil</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$swab->nama_tes}}</td>
                <td>{{$swab->hasil}}</td>
            </tr>
        </tbody>
    </table>
    </center>
        <table class="table">
        <thead>
            <tr>
                <th width="25%">Pemeriksa</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td><br><br></td>
          </tr>
            <tr>
                <td>{{$swab->nama_dokter}}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
