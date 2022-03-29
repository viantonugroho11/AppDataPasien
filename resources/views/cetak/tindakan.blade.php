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
    Nama : {{$pasien->nama}}<br>
    Umur : {{$pasien->umur}}<br>
    No KK : {{$pasien->nokk}}<br>
    Kepala Keluarga : {{$pasien->namakk}}<br>
    Alamat : {{$pasien->alamat}}<br>
    No Telp : {{$pasien->nohp}}<br>
    <br>
    <table class="table" border="1px" style="width: 100%">
        <thead>
            <tr>
                <th width="25%">Tanggal</th>
                <th width="75%">Tindakan</th>
                <th width="75%">Obat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasien->getTindakan->sortDesc() as $item)
            <tr>
                <td>{{$item->created_at}}</td>
                <td>{{$item->tindakan}}</td>
                <td>{{$item->obat}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
