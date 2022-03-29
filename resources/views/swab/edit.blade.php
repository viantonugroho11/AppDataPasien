@extends('master')
@section('header')
<div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Edit swab</h5>
                                            {{-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Data swab</a>
                                            <li class="breadcrumb-item"><a href="#!">Edit swab</a>
                                            <li class="breadcrumb-item"><a href="#!">{{$swab->nama}}</a>
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
                                                        <h5>Form swab Baru</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material" role="form" action="{{ route('swab.update',$swab->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group form-default">
                                                                <label class="">Nama Pasien</label>
                                                                <input type="text" name="nama" class="form-control" value="{{old('nama',$swab->nama)}}" readonly>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <label class="">Umur</label>
                                                                <input type="number" name="umur" class="form-control" value="{{old('umur',$swab->umur)}}" readonly>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <label class="">Alamat</label>
                                                                <textarea type="text" name="footer-email" class="form-control" readonly>{{$swab->alamat}}
                                                                </textarea>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <label class="">Nama Tes</label>
                                                                <input type="text" name="nama_tes" class="form-control" value="{{old('nama_tes',$swab->nama_tes)}}" readonly>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <select name="hasil">
                                                                    <option value="">Pilih Hasil</option>
                                                                    <option value="Negatif">Negatif</option>
                                                                    <option value="Negatif">Positif</option>
                                                                </select>
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
