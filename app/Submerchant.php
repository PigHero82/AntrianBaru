<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submerchant extends Model
{
    protected $fillable = ['idmerchant', 'nama', 'deskripsi', 'gambar'];
}
