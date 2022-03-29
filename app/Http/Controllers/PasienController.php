<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use PDF;
class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pasien=Pasien::simplePaginate(10);
        return view('pasien.index',compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pasien.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nama'     => 'required',
            'nokk'    =>'required',
            'umur'=>'required',
            'nohp'=>'required',
            'alamat'=>'required'
        ]);
        $pasien = Pasien::create([
            'nama'=>$request->nama,
            'nokk'=>$request->nokk,
            'umur'=>$request->umur,
            'namakk'=>$request->namakk,
            'nohp'=>$request->nohp,

            'alamat'=>$request->alamat
        ]);
        if($pasien){
            //redirect dengan pesan sukses
            return redirect()->route('pasien.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pasien.index')->with(['error' => 'Data Gagal Disimpan!']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pasien=Pasien::findorfail($id);
        return view('pasien.edit',compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pasien=Pasien::findorfail($id);
        $this->validate($request, [
            'nama'     => 'required',
            'nokk'    =>'required',
            'umur'=>'required',
            'nohp'=>'required',
            'alamat'=>'required'
        ]);
        $pasien->update([
            'nama'=>$request->nama,
            'nokk'=>$request->nokk,
            'umur'=>$request->umur,
            'namakk'=>$request->namakk,
            'nohp'=>$request->nohp,
            'alamat'=>$request->alamat
        ]);
        if($pasien){
            //redirect dengan pesan sukses
            return redirect()->route('pasien.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pasien.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pasien=Pasien::findorfail($id);
        $pasien->delete();
        if($pasien){
            //redirect dengan pesan sukses
            return redirect()->route('pasien.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pasien.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function print($id)
    {
        $pasien=Pasien::findorfail($id);
        // return view('cetak.kartu',compact('pasien'));
        $pdf = PDF::loadView('cetak.kartu',compact('pasien'));
        $customPaper=array(0,0,255.118,140.386);
        $pdf->setPaper($customPaper, 'portrait');
        // return $pdf->download('kartu.pdf');
        return $pdf->stream();
    }

    public function cari(Request $request)
    {
        //
        $cari = $request->cari;
        // dd($cari);
        $pasien=Pasien::where('nama','LIKE','%'.$cari.'%')->get();
        return view('pasien.cari',compact('pasien'));
    }
}
