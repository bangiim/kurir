<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengelolaCabang;
use App\KantorCabang;
Use Alert;

class PengelolaCabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengelolacabang = PengelolaCabang::all();
        return view('backend.pengelola-cabang.index', compact('pengelolacabang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kantorcabang = KantorCabang::all();
        return view('backend.pengelola-cabang.create', compact('kantorcabang'));
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
            'nama'            => 'required',
            'no_hp'           => 'required',
            'email'           => 'required|string|email|max:255|unique:pengelolacabang',
            'kantorcabang_id' => 'required'
        ]);

        $pengelolacabang = new PengelolaCabang;

        $pengelolacabang->nama            = $request->nama;
        $pengelolacabang->no_hp           = $request->no_hp;
        $pengelolacabang->email           = $request->email;
        $pengelolacabang->kantorcabang_id = $request->kantorcabang_id;

        $pengelolacabang->save();

        Alert::success('Create', 'Pengelola Cabang Berhasil Ditambah');

        return redirect('/pengelola-cabang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengelolacabang = PengelolaCabang::findOrFail($id);
        $kantorcabang = KantorCabang::all();
        return view('backend.pengelola-cabang.show', compact('pengelolacabang','kantorcabang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengelolacabang = PengelolaCabang::findOrFail($id);
        $kantorcabang = KantorCabang::all();
        return view('backend.pengelola-cabang.edit', compact('pengelolacabang','kantorcabang'));
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
            'nama'            => 'required',
            'no_hp'           => 'required',
            'email'           => 'required|string|email|max:255',
            'kantorcabang_id' => 'required'
        ]);

        $pengelolacabang = PengelolaCabang::find($id);

        $pengelolacabang->nama            = $request->nama;
        $pengelolacabang->no_hp           = $request->no_hp;
        $pengelolacabang->email           = $request->email;
        $pengelolacabang->kantorcabang_id = $request->kantorcabang_id;

        $pengelolacabang->save();

        Alert::success('Update', 'Pengelola Cabang Berhasil Diubah');

        return redirect('/pengelola-cabang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengelolacabang = PengelolaCabang::find($id);
        $pengelolacabang->delete();

        Alert::success('Delete', 'Pengelola Cabang Berhasil Dihapus');

        return redirect('/pengelola-cabang');
    }
}
