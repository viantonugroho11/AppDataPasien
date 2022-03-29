@extends('master')
@section('header')
<div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Data Pasien</h5>
                                            {{-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Pasien</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
@endsection
@section('konten')
<div class="card">
                                            <div class="card-header">
                                                <h5>Daftar Pasien</h5>
                                                <!-- <span>use class <code>table</code> inside table element</span> -->
                                                <div class="card-header-right">
                                                        <form class="form-material" role="form" action="{{ route('pasien.cari') }}" method="GET" enctype="multipart/form-data">
                                                            <div class="form-group form-default">
                                                                <input type="text" name="cari" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Search</label>
                                                            </div>
                                                        </form>
                                                </div>
                                                <br>
                                                <a class="btn-sm btn-primary waves-effect waves-light" href="{{route('pasien.create')}}">Tambah Pasien</a>
                                            </div>

                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Nama</th>
                                                                <th>Jenis Kelamin</th>
                                                                <th>Tanggal Lahir</th>
                                                                <th>Alamat</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($pasien->sortdesc() as $item)
                                                            <tr>
                                                                <td>{{$item->id}}</td>
                                                                <td>{{$item->nama}}</td>
                                                                <td>{{$item->jenis_kelamin}}</td>
                                                                <td>{{$item->tanggal_lahir}}</td>
                                                                <td>{{$item->alamat}}</td>
                                                                <td><form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pasien.destroy', $item->id) }}" method="POST">
                                                                        <a href="{{ route('pasien.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                                        <a href="{{ route('cetakpasien', $item->id) }}" class="btn btn-sm btn-primary">Print</a>
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
@endsection
