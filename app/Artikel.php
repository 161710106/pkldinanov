<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul','konten','slug','foto','publish'];
    public $timestamps = true;
    public function User()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
