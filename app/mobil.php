<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $table='mobils';
    protected $fillable=['nama','plat_nomor','kapasitas','harga','jenis','warna','perseneling','id_galeri'];

    public function boking(){
    	return $this->hasOne('App\boking','id_mobil');
    }
    public function galeri(){
    	return $this->belongsTo('App\galeri','id_galeri');
    }
}
