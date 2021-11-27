<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jarak extends Model
{
    protected $table = 'jarak';
    protected $fillable = ['jarak','harga'];

    public function pengiriman()
    {
        return $this->hasOne('App\Pengiriman');
    }
}
