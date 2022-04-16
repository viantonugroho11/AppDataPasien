@extends('master')
@section('header')
<div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Laporan Keluhan</h5>
                                            {{-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Laporan Keluhan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
@endsection
@section('konten')
<div class="card">
                                            <div class="card-header">
                                                {{-- <h5>Daftar Keluhan</h5> --}}
                                                <!-- <span>use class <code>table</code> inside table element</span> -->
                                                <div class="row">
                                                    <div class="col-md-4">
                                                    <form class="form-material" role="form" action="{{ route('laporan.tanggal') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group form-default">
                                                            <input type="date" name="tanggal" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Tanggal</label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <button type="Submit" class="btn-sm btn-block btn-primary btn-flat">
                                                                            Cari
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <form class="form-material" role="form" action="{{ route('laporan.bulan') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group form-default">
                                                            <input type="month" name="bulan" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Bulan</label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <button type="Submit" class="btn-sm btn-block btn-primary btn-flat">
                                                                            Cari
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <form class="form-material" role="form" action="{{ route('laporan.tahun') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group form-default">
                                                            <select name="tahun" class="form-control">
                                                                @for ($i = 2019; $i < 2050; $i++)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Tahun</label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <button type="Submit" class="btn-sm btn-block btn-primary btn-flat">
                                                                            Cari
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Nama</th>
                                                                <th>Jenis Keluhan</th>
                                                                <th>Tanggal Periksa</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($pasien->sortdesc() as $item)
                                                            <tr>
                                                                <td>{{$item->id}}</td>
                                                                <td>{{$item->nama}}</td>
                                                                <td>{{$item->detail}}</td>
                                                                <td>{{$item->created_at}}</td>
                                                                <td><form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pasien.destroy', $item->id) }}" method="POST">
                                                                        {{-- <a href="{{ route('pasien.edit', $item->id) }}" class="btn btn-sm btn-primary">Detai</a> --}}
                                                                        <a href="{{ route('cetakpasien', $item->id) }}" target="_blank" class="btn btn-sm btn-primary">Print</a>
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        {{-- <button type="submit" class="btn btn-sm btn-danger">Hapus</button> --}}
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                    <div class="d-flex justify-content-center">
                                                        {{ $pasien->links() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
@endsection
