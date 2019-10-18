<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $fillable = ['nama', 'alamat', 'deskripsi', 'gambar', 'iduser'];
}
