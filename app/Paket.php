<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table ='pakets';
    protected $fillable =['jenis_paket','pembina_id','fasilitas_id','syarat_id'];
    public $timestamps = true;  
    public function Pembina()
	{
		return $this->belongsTo('App\Pembina','pembina_id');
	}
    public function Fasilitas()
	{
		return $this->belongsTo('App\Fasilitas','fasilitas_id');
    }
public function Syarat()
{
    return $this->belongsTo('App\Syarat','syarat_id');
}
public function Jadwal()
{
    return $this->hasOne('App\Jadwal','jadwal_id');
}

}

