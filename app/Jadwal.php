<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table ='jadwals';
    protected $fillable =['tanggal','durasi','quad','paket_id'];
    public $timestamps = true;  

    public function Paket()
	{
		return $this->belongsTo('App\Paket','paket_id');
	}
}
