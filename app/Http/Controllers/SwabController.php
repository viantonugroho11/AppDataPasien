<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Swab;
use Carbon\Carbon;
use PDF;
class SwabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $swab=Swab::latest()->paginate(20);
        return view('swab.index',compact('swab'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('swab.add');
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
            'umur'    =>'required',
            'jenis_kelamin'=>'required',
            'alamat'=>'required'
        ]);
        $swab = Swab::create([
            'nama'=>$request->nama,
            'umur'=>$request->umur,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'nama_tes'=>$request->nama_tes,
            'nama_dokter'=>$request->namadokter
        ]);
        if($swab){
            //redirect dengan pesan sukses
            return redirect()->route('swab.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('swab.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $swab=Swab::findorfail($id);
        // return view('cetak.kartu',compact('pasien'));
        $pdf = PDF::loadView('swab.show',compact('swab'));
        // return $pdf->download('kartu.pdf');
        return $pdf->stream();
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
        
        $swab=Swab::findorfail($id);
        return view('swab.edit',compact('swab'));
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
        $this->validate($request, [
            'hasil'     => 'required'
        ]);
        $swab=Swab::findorfail($id);
        $swab->update([
            'hasil'=>$request->hasil
        ]);
        if($swab){
            //redirect dengan pesan sukses
            return redirect()->route('swab.show',$id)->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('swab.show',$id)->with(['error' => 'Data Gagal Disimpan!']);
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
        $swab=Swab::findorfail($id);
        $swab->delete();
        if($swab){
            //redirect dengan pesan sukses
            return redirect()->route('swab.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('swab.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function cari(Request $request)
    {
        //
        $cari = $request->cari;
        // dd($cari);
        $swab=Swab::orwhere('id',$cari)->orwhere('nama',$cari)->get();
        dd($swab);
        return view('swab.cari',compact('swab'));
    }
}
