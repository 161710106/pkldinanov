<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table ='fasilitas';
    protected $fillable =['bus','pesawat','hotel'];
    public $timestamps = true;  
    public function Paket()
    {
    	return $this->hasMany('App\Paket','fasilitas_id');
    }
}
