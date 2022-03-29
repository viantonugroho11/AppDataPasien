<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
Use App\Models\Keluhan;
class LaporanController extends Controller
{
    public function index()
    {
        $pasien=Keluhan::join('pasiens','pasiens.id','keluhans.id_pasien')->simplePaginate(10);
        return view('laporan.pasien',compact('pasien'));
    }
    public function caribulan(Request $request)
    {
        $pasien=Keluhan::join('pasiens','pasiens.id','keluhans.id_pasien')
        ->whereMonth('keluhans.created_at','=',substr($request->bulan, 5))
        ->whereYear('keluhans.created_at','=',substr($request->bulan, 0,4))->simplePaginate(10);
        return view('laporan.pasien',compact('pasien'));
    }
    public function caritanggal(Request $request)
    {
        $pasien=Keluhan::join('pasiens','pasiens.id','keluhans.id_pasien')
        ->wheredate('keluhans.created_at','=',$request->tanggal)->simplePaginate(10);
        return view('laporan.pasien',compact('pasien'));
    }
    public function caritahun(Request $request)
    {
        $pasien=Keluhan::join('pasiens','pasiens.id','keluhans.id_pasien')
        ->whereyear('keluhans.created_at','=',$request->tahun)->simplePaginate(10);
        return view('laporan.pasien',compact('pasien'));
    }
}
