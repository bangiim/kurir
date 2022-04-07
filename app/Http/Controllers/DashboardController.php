<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KantorCabang;
use App\Pengiriman;
use App\Kurir;

class DashboardController extends Controller
{
    public function index()
    {   
        $kantorCabang = KantorCabang::count();
        $pengiriman = Pengiriman::count();
        $kurir = Kurir::count();
        return view('backend.dashboard.index', compact('kantorCabang','pengiriman','kurir'));
    }
}
