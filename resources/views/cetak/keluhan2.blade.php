@extends('cetak.master')
@section('konten')

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
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
