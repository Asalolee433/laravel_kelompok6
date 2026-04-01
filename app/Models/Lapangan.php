<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $table = 'lapangans';

    protected $fillable = [
        'nama_lapangan',
        'harga_per_jam',
        'deskripsi',
        'foto'
    ];
}
