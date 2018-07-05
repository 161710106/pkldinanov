<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    
        protected $table ='beritas';
        protected $fillable =['tanggal','judul','isi'];
        public $timestamps = true;
    
}
