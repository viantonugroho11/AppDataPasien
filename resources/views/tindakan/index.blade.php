@extends('master')
@section('header')
<div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Cek Pasien</h5>
                                            {{-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Cek Pasien</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
@endsection
@section('konten')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Cek Pasien</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material" role="form" action="{{ route('tindakancari') }}" method="GET" enctype="multipart/form-data">
                                                            <div class="form-group form-default">
                                                                <input type="text" name="cari" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nama/ID</label>
                                                            </div>
                                                            <div class="row">
                                                                <button type="Submit" class="btn-sm btn-block btn-primary btn-flat">
                                                                    <i class="fas fa-save"></i> Cek
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
@endsection
