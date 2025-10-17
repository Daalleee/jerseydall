<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jersey extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'ukuran',
        'harga',
        'stok',
        'foto',
        'deskripsi',
    ];
}
