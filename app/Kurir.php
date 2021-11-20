<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    protected $table = 'kurir';
    protected $fillable = ['nama','no_hp','email','kantorcabang_id'];

    public function kantorcabang()
    {
        return $this->belongsTo('App\KantorCabang');
    }
}
