<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembina extends Model
{
    protected $table ='pembinas';
        protected $fillable =['nama','jabatan'];
        public $timestamps = true;
        public function Paket()
    {
    	return $this->hasOne('App\Paket','pembina_id');
    }

}
