<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengelolaCabang extends Model
{
    protected $table = 'pengelolacabang';
    protected $fillable = ['nama','no_hp','email','kantorcabang_id'];

    public function kantorcabang()
    {
        return $this->belongsTo('App\KantorCabang');
    }
}
