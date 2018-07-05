<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembina extends Model
{
    protected $table ='pembinas';
        protected $fillable =['nama','jabatan'];
        public $timestamps = true;
}
