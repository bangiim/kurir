<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jarak;
Use Alert;

class JarakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jarak = Jarak::all();
        return view('backend.jarak.index', compact('jarak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.jarak.create');
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
            'jarak' => 'required',
            'harga' => 'required'
        ]);

        $jarak = new Jarak;

        $jarak->jarak = $request->jarak;
        $jarak->harga = $request->harga;

        $jarak->save();

        Alert::success('Create', 'Jarak Berhasil Ditambah');

        return redirect('/jarak');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jarak = Jarak::findOrFail($id);
        return view('backend.jarak.show', compact('jarak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jarak = Jarak::findOrFail($id);
        return view('backend.jarak.edit', compact('jarak'));
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
            'jarak' => 'required',
            'harga' => 'required'
        ]);

        $jarak = Jarak::find($id);

        $jarak->jarak = $request->jarak;
        $jarak->harga = $request->harga;

        $jarak->save();

        Alert::success('Update', 'Jarak Berhasil Diubah');

        return redirect('/jarak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jarak->delete();

        Alert::success('Delete', 'Jarak Berhasil Dihapus');

        return redirect('/jarak');
    }
}
