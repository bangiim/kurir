<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    protected $table = 'pengiriman';
    protected $fillable = [
        'nama_pengirim','nohp_pengirim','alamat_pengirim','nama_penerima','nohp_penerima','alamat_penerima',
        'no_resi','jenis_barang','berat','layanan','jarak_id','kantorcabang_id','biaya','status'
    ];

    public function jarak()
    {
        return $this->belongsTo('App\Jarak');
    }

    public function kantorcabang()
    {
        return $this->belongsTo('App\KantorCabang');
    }
}
