<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurir;
use App\KantorCabang;
Use Alert;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurir = Kurir::all();
        return view('backend.kurir.index', compact('kurir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kantorcabang = KantorCabang::all();
        return view('backend.kurir.create', compact('kantorcabang'));
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
            'email'           => 'required|string|email|max:255|unique:kurir',
            'kantorcabang_id' => 'required'
        ]);

        $kurir = new Kurir;

        $kurir->nama            = $request->nama;
        $kurir->no_hp           = $request->no_hp;
        $kurir->email           = $request->email;
        $kurir->kantorcabang_id = $request->kantorcabang_id;

        $kurir->save();

        Alert::success('Create', 'Kurir Berhasil Ditambah');

        return redirect('/kurir');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kurir = Kurir::findOrFail($id);
        $kantorcabang = KantorCabang::all();
        return view('backend.kurir.show', compact('kurir','kantorcabang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kurir = Kurir::findOrFail($id);
        $kantorcabang = KantorCabang::all();
        return view('backend.kurir.edit', compact('kurir','kantorcabang'));
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

        $kurir = Kurir::find($id);

        $kurir->nama            = $request->nama;
        $kurir->no_hp           = $request->no_hp;
        $kurir->email           = $request->email;
        $kurir->kantorcabang_id = $request->kantorcabang_id;

        $kurir->save();

        Alert::success('Update', 'Kurir Berhasil Diubah');

        return redirect('/kurir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kurir = Kurir::find($id);
        $kurir->delete();

        Alert::success('Delete', 'Kurir Berhasil Dihapus');

        return redirect('/kurir');
    }
}
