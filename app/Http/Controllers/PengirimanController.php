<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jarak;
use App\KantorCabang;
use App\Pengiriman;
Use Alert;

class PengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengiriman = Pengiriman::all();
        return view('backend.pengiriman.index', compact('pengiriman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jarak = Jarak::all();
        $kantorcabang = KantorCabang::all();

        //Membuat noResi
        $noResi = Pengiriman::selectRaw('LPAD(CONVERT(COUNT("no_resi") + 1, char(6)) , 6,"0") as no_resi')->first();

        return view('backend.pengiriman.create', compact('jarak','kantorcabang','noResi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pengirim'   => 'required',
            'nohp_pengirim'   => 'required',
            'alamat_pengirim' => 'required',
            'nama_penerima'   => 'required',
            'nohp_penerima'   => 'required',
            'alamat_penerima' => 'required',
            'no_resi'         => 'required',
            'jenis_barang'    => 'required',
            'berat'           => 'required',
            'layanan'         => 'required',
            'jarak_id'        => 'required',
            'kantorcabang_id' => 'required',
            'biaya'           => 'required',
            'status'          => 'required'
        ]);

        $pengiriman = new Pengiriman;

        $pengiriman->nama_pengirim   = $request->nama_pengirim;
        $pengiriman->nohp_pengirim   = $request->nohp_pengirim;
        $pengiriman->alamat_pengirim = $request->alamat_pengirim;
        $pengiriman->nama_penerima   = $request->nama_penerima;
        $pengiriman->nohp_penerima   = $request->nohp_penerima;
        $pengiriman->alamat_penerima = $request->alamat_penerima;
        $pengiriman->no_resi         = $request->no_resi;
        $pengiriman->jenis_barang    = $request->jenis_barang;
        $pengiriman->berat           = $request->berat;
        $pengiriman->layanan         = $request->layanan;
        $pengiriman->jarak_id        = $request->jarak_id;
        $pengiriman->kantorcabang_id = $request->kantorcabang_id;
        $pengiriman->biaya           = $request->biaya;
        $pengiriman->status          = $request->status;

        $pengiriman->save();

        Alert::success('Create', 'Pengiriman Berhasil Ditambah');

        return redirect('/pengiriman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengiriman = Pengiriman::findOrFail($id);
        $jarak = Jarak::all();
        $kantorcabang = KantorCabang::all();
        return view('backend.pengiriman.show', compact('pengiriman','jarak','kantorcabang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengiriman = Pengiriman::findOrFail($id);
        $jarak = Jarak::all();
        $kantorcabang = KantorCabang::all();
        return view('backend.pengiriman.edit', compact('pengiriman','jarak','kantorcabang'));
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
        $request->validate([
            'nama_pengirim'   => 'required',
            'nohp_pengirim'   => 'required',
            'alamat_pengirim' => 'required',
            'nama_penerima'   => 'required',
            'nohp_penerima'   => 'required',
            'alamat_penerima' => 'required',
            'no_resi'         => 'required',
            'jenis_barang'    => 'required',
            'berat'           => 'required',
            'layanan'         => 'required',
            'jarak_id'        => 'required',
            'kantorcabang_id' => 'required',
            'biaya'           => 'required',
            'status'          => 'required'
        ]);

        $pengiriman = Pengiriman::find($id);

        $pengiriman->nama_pengirim   = $request->nama_pengirim;
        $pengiriman->nohp_pengirim   = $request->nohp_pengirim;
        $pengiriman->alamat_pengirim = $request->alamat_pengirim;
        $pengiriman->nama_penerima   = $request->nama_penerima;
        $pengiriman->nohp_penerima   = $request->nohp_penerima;
        $pengiriman->alamat_penerima = $request->alamat_penerima;
        $pengiriman->no_resi         = $request->no_resi;
        $pengiriman->jenis_barang    = $request->jenis_barang;
        $pengiriman->berat           = $request->berat;
        $pengiriman->layanan         = $request->layanan;
        $pengiriman->jarak_id        = $request->jarak_id;
        $pengiriman->kantorcabang_id = $request->kantorcabang_id;
        $pengiriman->biaya           = $request->biaya;
        $pengiriman->status          = $request->status;

        $pengiriman->save();

        Alert::success('Update', 'Pengiriman Berhasil Diubah');

        return redirect('/pengiriman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengiriman->delete();

        Alert::success('Delete', 'Pengiriman Berhasil Dihapus');

        return redirect('/pengiriman');
    }
}
