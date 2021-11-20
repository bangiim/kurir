<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KantorCabang extends Model
{
    protected $table = 'kantorcabang';
    protected $fillable = ['province_id','city_id','nama_kantor','alamat','no_telp','jam_operasional'];

    public function pengelolacabang()
    {
        return $this->hasOne('App\PengelolaCabang');
    }

    public function kurir()
    {
        return $this->hasMany('App\Kurir');
    }

    public function provinsi()
    {
        return $this->belongsTo('Laravolt\Indonesia\Models\Province');
    }

    public function kota()
    {
        return $this->belongsTo('Laravolt\Indonesia\Models\City');
    }
}
