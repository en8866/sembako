<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sembako extends Model
{
    protected $fillable = ['nama_barang', 'jumlah_barang', 'harga_barang', 'satuan'];
}