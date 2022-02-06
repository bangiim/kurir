<?php

namespace App\Http\Controllers;

use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
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
        $cities = City::all();
        return view('backend.kantor-cabang.index', compact('kantorcabang','cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $provinces = Province::pluck('name', 'id');
        return view('backend.kantor-cabang.create', compact('provinces'));
    }

    /**
     * Laravolt Indonesia
     * Get Kota berdasarkan provinsi
     */

    public function cities(Request $request)
    {
        return \Indonesia::findProvince($request->id, ['cities'])->cities->pluck('name', 'id');
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
            'province_id'     => 'required',
            'city_id'         => 'required',
            'nama_kantor'     => 'required',
            'alamat'          => 'required',
            'no_telp'         => 'required',
            'jam_operasional' => 'required'
        ]);

        $kantorcabang = new KantorCabang;

        $kantorcabang->province_id     = $request->province_id;
        $kantorcabang->city_id         = $request->city_id;
        $kantorcabang->nama_kantor     = $request->nama_kantor;
        $kantorcabang->alamat          = $request->alamat;
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
        $provinces = Province::all();
        $cities = City::all();
        return view('backend.kantor-cabang.show', compact('kantorcabang','provinces','cities'));
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
        $provinces = Province::all();
        $cities = City::all();
        return view('backend.kantor-cabang.edit', compact('kantorcabang','provinces','cities'));
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
            'province_id'     => 'required',
            'city_id'         => 'required',
            'nama_kantor'     => 'required',
            'alamat'          => 'required',
            'no_telp'         => 'required',
            'jam_operasional' => 'required'
        ]);

        $kantorcabang = KantorCabang::find($id);

        $kantorcabang->province_id     = $request->province_id;
        $kantorcabang->city_id         = $request->city_id;
        $kantorcabang->nama_kantor     = $request->nama_kantor;
        $kantorcabang->alamat          = $request->alamat;
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
        $kantorcabang = KantorCabang::find($id);
        $kantorcabang->delete();

        Alert::success('Delete', 'Kantor Cabang Berhasil Dihapus');

        return redirect('/kantor-cabang');
    }
}
