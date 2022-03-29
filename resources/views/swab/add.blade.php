@extends('master')
@section('header')
<div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Tambah Pasien</h5>
                                            {{-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Data Hasil Swab</a>
                                            <li class="breadcrumb-item"><a href="#!">Tambah Swab</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
@endsection
@section('konten')
<div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Form Swab Baru</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material" role="form" action="{{ route('swab.store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                            <div class="form-group form-default">
                                                                <input type="text" name="nama" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nama Pasien</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="number" name="umur" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Umur</label>
                                                                <!-- <label class="float-label">Jenis Kelamin</label> -->
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <label class="">Jenis Kelamin</label>
                                                                <select name="jenis_kelamin">
                                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                                <span class="form-bar"></span>
                                                                <!-- <label class="float-label">Jenis Kelamin</label> -->
                                                            </div>
                                                            {{-- <div class="form-group form-default">
                                                                <label class="">Tanggal Lahir</label>
                                                                <input type="date" name="tanggal_Lahir" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <!-- <label class="float-label">Jenis Kelamin</label> -->
                                                            </div> --}}
                                                            <div class="form-group form-default">
                                                                <textarea type="text" name="alamat" class="form-control">
                                                                </textarea>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Alamat</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="nama_tes" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nama Tes</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="namadokter" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nama Dokter Periksa</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                    <div class="col-md-6">
                                                                        <button type="Submit" class="btn-sm btn-block btn-primary btn-flat">
                                                                            <i class="fas fa-save"></i> Save
                                                                        </button>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <button type="Reset" class="btn-sm btn-block btn-primary btn-flat">
                                                                            <i class="fas fa-cancel"></i> Cancel
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
@endsection
