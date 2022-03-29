@extends('master')
@section('header')
<div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Detail Pasien</h5>
                                            {{-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Detail Pasien</a>
                                            <li class="breadcrumb-item"><a href="#!">{{$pasien->id}}</a>
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
                                                        <h5>Data Pasien</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        Nama : {{$pasien->nama}} <br>
                                                        No KK : {{$pasien->nokk}} <br>
                                                        Umur : {{$pasien->umur}} <br>
                                                        No HP : {{$pasien->nohp}} <br>
                                                        Alamat : {{$pasien->alamat}}<br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Riwayat Penyakit/Keluhan</h5>
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <span class="col-md-3">
                                                                    <a href="{{ route('cek.show', $pasien->id) }}" type="Submit" class="btn-sm btn-block btn-primary btn-flat">
                                                                        <i class="fas fa-save"></i> Tambah Keluhan
                                                                    </a>
                                                                </span>
                                                                <span class="col-md-3">
                                                                    <a href="{{ route('cetakkeluhan', $pasien->id) }}" type="Submit" class="btn-sm btn-block btn-primary btn-flat">
                                                                        <i class="fas fa-save"></i> Print Keluhan
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                        @foreach ($pasien->getKeluhan->sortDesc() as $item)
                                                        <div class="col-md-4">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Tanggal : {{$item->created_at}}</h5>
                                                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                                </div>
                                                                <div class="card-block">
                                                                    Keluhan:
                                                                    {{$item->detail}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
@endsection
