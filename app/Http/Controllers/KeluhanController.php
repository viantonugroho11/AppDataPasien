<?php

namespace App\Http\Controllers;
use App\Models\Keluhan;
use App\Models\Pasien;
use Illuminate\Http\Request;
use PDF;
class KeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pasien=Pasien::all();
        return view('keluhan.index',compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('keluhan.add',compact('pasien'));
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
        $pasien=Pasien::findorfail($id);
        return view('keluhan.add',compact('pasien'));
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
            'detail'     => 'required'
        ]);
        $keluhan = Keluhan::create([
            'id_pasien'=>$request->id,
            'detail'=>$request->detail
        ]);
        if($keluhan){
            //redirect dengan pesan sukses
            return redirect()->route('cek.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('cek.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    }

    public function cari(Request $request)
    {
        //
        $cari = $request->cari;
        // dd($cari);
        $pasien=Pasien::orwhere('id',$cari)->orwhere('nama',$cari)->first();
        return view('keluhan.show',compact('pasien'));
    }

    public function print($id)
    {
        $pasien=Pasien::findorfail($id);
        // return view('cetak.kartu',compact('pasien'));
        $pdf = PDF::loadView('cetak.keluhan',compact('pasien'));
        // return $pdf->download('kartu.pdf');
        return $pdf->stream();
    }
}
