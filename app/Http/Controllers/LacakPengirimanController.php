<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengiriman;

class LacakPengirimanController extends Controller
{
    /**
     * Mencari lokasi paket
     */
    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $pengiriman = Pengiriman::where('no_resi', 'like', "%" . $keyword . "%")->paginate(5);
        return view('hasilpencarian', compact('pengiriman'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Detail paket
     */
    public function detail($id)
    {
        $pengiriman = Pengiriman::findOrFail($id);
        return view('detailpaket', compact('pengiriman'));
    }
}
