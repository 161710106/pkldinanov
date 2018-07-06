<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syarat extends Model
{
    protected $table ='syarats';
    protected $fillable =['termasuk','tidak_termasuk','persyaratan','dp'];
    public $timestamps = true;
    public function Paket()
    {
    	return $this->hasMany('App\Paket','syarat_id');
    }
}
