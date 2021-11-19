<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KantorCabang;
Use Alert;

class KantorCabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kantorcabang = KantorCabang::all();
        return view('backend.kantor-cabang.index', compact('kantorcabang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kantor-cabang.create');
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
            'nama_kantor'     => 'required',
            'alamat'          => 'required',
            'kota'            => 'required',
            'no_telp'         => 'required',
            'jam_operasional' => 'required'
        ]);

        $kantorcabang = new KantorCabang;

        $kantorcabang->nama_kantor     = $request->nama_kantor;
        $kantorcabang->alamat          = $request->alamat;
        $kantorcabang->kota            = $request->kota;
        $kantorcabang->no_telp         = $request->no_telp;
        $kantorcabang->jam_operasional = $request->jam_operasional;

        $kantorcabang->save();

        Alert::success('Create', 'Kantor Cabang Berhasil Ditambah');

        return redirect('/kantor-cabang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kantorcabang = KantorCabang::findOrFail($id);
        return view('backend.kantor-cabang.show', compact('kantorcabang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kantorcabang = KantorCabang::findOrFail($id);
        return view('backend.kantor-cabang.edit', compact('kantorcabang'));
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
            'nama_kantor'     => 'required',
            'alamat'          => 'required',
            'kota'            => 'required',
            'no_telp'         => 'required',
            'jam_operasional' => 'required'
        ]);

        $kantorcabang = KantorCabang::find($id);

        $kantorcabang->nama_kantor     = $request->nama_kantor;
        $kantorcabang->alamat          = $request->alamat;
        $kantorcabang->kota            = $request->kota;
        $kantorcabang->no_telp         = $request->no_telp;
        $kantorcabang->jam_operasional = $request->jam_operasional;

        $kantorcabang->save();

        Alert::success('Update', 'Kantor Cabang Berhasil Diubah');

        return redirect('/kantor-cabang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kantorcabang->delete();

        Alert::success('Delete', 'Kantor Cabang Berhasil Dihapus');

        return redirect('/kantor-cabang');
    }
}
