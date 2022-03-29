@extends('master')
@section('header')
<div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Edit Pasien</h5>
                                            {{-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Data Pasien</a>
                                            <li class="breadcrumb-item"><a href="#!">Edit Pasien</a>
                                            <li class="breadcrumb-item"><a href="#!">{{$pasien->nama}}</a>
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
                                                        <h5>Form Pasien Baru</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material" role="form" action="{{ route('pasien.update',$pasien->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group form-default">
                                                                <input type="text" name="nama" class="form-control" value="{{old('nama',$pasien->nama)}}">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nama Pasien</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="number" name="nokk" class="form-control" value="{{old('nokk',$pasien->nokk)}}">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nomor KK</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="number" name="umur" class="form-control" value="{{old('umur',$pasien->nama)}}">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Umur</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="namakk" class="form-control" value="{{old('namakk',$pasien->namakk)}}">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nama Kelapa Keluarga</label>
                                                                <!-- <label class="float-label">Jenis Kelamin</label> -->
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <textarea type="text" name="footer-email" class="form-control" >{{$pasien->alamat}}
                                                                </textarea>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Alamat</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="number" name="nohp" class="form-control" value="{{old('nohp',$pasien->nama)}}">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">No HP</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                    <div class="col-md-6">
                                                                        <button type="Submit" class="btn btn-block btn-primary btn-flat">
                                                                            <i class="fas fa-save"></i> Save
                                                                        </button>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <button type="Reset" class="btn btn-block btn-primary btn-flat">
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
