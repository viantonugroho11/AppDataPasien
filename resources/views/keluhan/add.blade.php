@extends('master')
@section('header')
<div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Keluhan</h5>
                                            {{-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Keluhan</a>
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
                                                        <h5>Form Keluhan</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material" role="form" action="{{ route('cek.update',$pasien->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group form-default">
                                                                <input type="text" name="id" class="form-control" value="{{old('id',$pasien->id)}}" hidden>
                                                                <input type="text" name="nama" class="form-control" value="{{old('id',$pasien->nama)}}" readonly>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label"></label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <textarea name="detail" class="form-control" style="height: 500px;">
                                                                </textarea>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Keluhan</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                    <div class="col-md-6">
                                                                        <button type="Submit" class="btn-sm btn-block btn-primary btn-flat">
                                                                            <i class="fas fa-save"></i> Save
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
