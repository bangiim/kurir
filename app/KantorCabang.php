<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KantorCabang extends Model
{
    protected $table = 'kantorcabang';
    protected $fillable = ['nama_kantor','alamat','kota','no_telp','jam_operasional'];

    public function pengelolacabang()
    {
        return $this->hasOne('App\PengelolaCabang');
    }

    public function kurir()
    {
        return $this->hasMany('App\Kurir');
    }
}
