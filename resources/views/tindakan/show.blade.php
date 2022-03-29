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
                                            @if ($pasien==null)
                                                    <li class="breadcrumb-item"><a href="#!">0</a>
                                                  @else  
                                                  <li class="breadcrumb-item"><a href="#!">{{$pasien->id}}</a>
                                            @endif
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
                                                    @if ($pasien==null)
                                                        Nama : Data Tidak Ditemukan<br>
                                                        Jenis : <br>
                                                        Tanggal Lahir : <br>
                                                        Alamat : <br>
                                                    @else  
                                                        Nama Pasien : {{$pasien->nama}} <br>
                                                        No KK : {{$pasien->nokk}} <br>
                                                        Umur : {{$pasien->umur}} <br>
                                                        Alamat : {{$pasien->alamat}}<br>
                                                        No Hp : {{$pasien->nohp}}<br>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Riwayat Tindakan</h5>
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                @if ($pasien==null)
                                                                    
                                                                @else  
                                                                <span class="col-md-3">
                                                                    <a href="{{ route('tindakan.show', $pasien->id) }}" type="Submit" class="btn-sm btn-block btn-primary btn-flat">
                                                                        <i class="fas fa-save"></i> Tambah Tindakan
                                                                    </a>
                                                                </span>
                                                                <span class="col-md-3">
                                                                    <a href="{{ route('cetaktindakan', $pasien->id) }}" type="Submit" class="btn-sm btn-block btn-primary btn-flat">
                                                                        <i class="fas fa-save"></i> Print Tindakan
                                                                    </a>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                        @if ($pasien==null)
                                                            <h3>Data Tidak Ditemukan</h3>
                                                        @else  
                                                        @foreach ($pasien->getTindakan->sortDesc() as $item)
                                                        <div class="col-md-4">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Tanggal : {{$item->created_at}}</h5>
                                                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                                </div>
                                                                <div class="card-block">
                                                                    Tindakan:
                                                                    {{$item->tindakan}}
                                                                </div>
                                                                <div class="card-block">
                                                                    Obat/Terapi:
                                                                    {{$item->obat}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        @endif
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
@endsection
