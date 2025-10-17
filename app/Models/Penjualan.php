<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_jersey',
        'ukuran',
        'kondisi',
        'harga_ditawarkan',
        'foto',
        'status',
        'metode_pengiriman',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
