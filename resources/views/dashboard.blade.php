@extends('master')
@section('header')
<div class="page-block">
    <div class="row align-items-center">
        <div class="col-md-8">
            <div class="page-header-title">
                <h5 class="m-b-10">Dashboard</h5>
                {{-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> --}}
            </div>
        </div>
        <div class="col-md-4">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('konten')
{{-- <div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Hello card</h5>
                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li>
                            <i class="fa fa fa-wrench open-card-option"></i>
                        </li>
                        <li>
                            <i class="fa fa-window-maximize full-card"></i>
                        </li>
                        <li>
                            <i class="fa fa-minus minimize-card"></i>
                        </li>
                        <li>
                            <i class="fa fa-refresh reload-card"></i>
                        </li>
                        <li>
                            <i class="fa fa-trash close-card"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum."
                </p>
            </div>
        </div>
    </div>
</div> --}}
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <h5>Total Pasien</h5>
                {{-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> --}}
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li>
                            <i class="fa fa fa-wrench open-card-option"></i>
                        </li>
                        <li>
                            <i class="fa fa-window-maximize full-card"></i>
                        </li>
                        <li>
                            <i class="fa fa-minus minimize-card"></i>
                        </li>
                        <li>
                            <i class="fa fa-refresh reload-card"></i>
                        </li>
                        <li>
                            <i class="fa fa-trash close-card"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <p>
                    <h3>{{$jumlah_pasien}}</h3>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <h5>Jumlah Keluhan</h5>
                <span>Hari Ini</span>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li>
                            <i class="fa fa fa-wrench open-card-option"></i>
                        </li>
                        <li>
                            <i class="fa fa-window-maximize full-card"></i>
                        </li>
                        <li>
                            <i class="fa fa-minus minimize-card"></i>
                        </li>
                        <li>
                            <i class="fa fa-refresh reload-card"></i>
                        </li>
                        <li>
                            <i class="fa fa-trash close-card"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <p>
                    <h3>{{$jumlah_keluhan_hariini}}</h3>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
